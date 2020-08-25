<?php

use Illuminate\Database\Seeder;
use App\GuestMessage;
class Messages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $messages = [
            [
                'author' => 'Test Author',
                'messagetext' => 'test message1',
            ],
            [
                'author' => 'Test Author',
                'messagetext' => 'test message2',
            ],
            [
                'author' => 'Test Author',
                'messagetext' => 'test message3',
            ],
            [
                'author' => 'Test Author',
                'messagetext' => 'test message4',
            ],
            [
                'author' => 'Test Author',
                'messagetext' => 'test message5',
            ],
        ];

        foreach($messages as $message) {
            GuestMessage::create($message);
        }
    }
}
