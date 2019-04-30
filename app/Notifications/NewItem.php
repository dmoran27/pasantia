
<?php
namespace App\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Equipo;
use App\User;
class NewItem extends Notification implements ShouldQueue
{
    use Queueable;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    protected $equipo,$user;
    public function __construct(Equipo $equipo,User $user)
    {
        $this->equipo = $equipo;
        $this->user = $user;
    }
    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'broadcast'];
    }
    
    public function toArray($notifiable)
    {
        return [
            'user_id' => $this->user->id,
            'user_name' => $this->user->nombre,
            'equipo' => $this->equipo->nombre,
        ];
    }
}   
