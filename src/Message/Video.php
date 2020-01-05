<?php

namespace CodeBot\Message;

class Video implements Message
{
    public function __construct(string $recipientId)
    {
        $this->recipientId = $recipientId;
    }
    public function message (string $messageText) :array
    {
        return [
            'recipient' => [
                'id' => $this->recipientId
            ],
            'message' => [
                'attachment' => [
                    'type' => 'video',
                    'payload' => [
                        'url' => $messageText
                    ]
                ]
            ]
        ];
    }
}