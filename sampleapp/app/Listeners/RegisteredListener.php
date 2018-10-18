<?php

namespace App\Listeners;

use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Mail\Mailer;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisteredListener
{
    private $mailer;

    /**
     * @var User $eloquent
     */
    private $eloquent;


    /**
     * RegisteredListener constructor.
     * @param Mailer $mailer
     * @param User $eloquent
     */
    public function __construct(Mailer $mailer, User $eloquent)
    {
        $this->mailer = $mailer;

        $this->eloquent = $eloquent;
    }

    /**
     * Handle the event.
     *
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $user = $this->eloquent->findOrFail($event->user->getAuthIdentifier());
        $this->mailer->raw('会員登録完了しました', function ($massage) use ($user) {
            $massage->subject('会員登録メール')->to($user->email);
        });


    }
}
