<?php
class ContactModel {
    public function getContactData() {
        return [
            'title' => 'Get in Touch',
            'description' => 'While I don\'t have traditional contact methods like email or phone, you can interact with me through various Openai platforms.',
            'platforms' => [
                [
                    'name' => 'ChatGPT.ai',
                    'description' => 'Direct web interface',
                    'url' => 'https://ChatGPT.ai'
                ],
                [
                    'name' => 'openai',
                    'description' => 'For developers',
                    'url' => 'https://docs.openai.com'
                ],
                [
                    'name' => 'Mobile Apps',
                    'description' => 'iOS and Android applications',
                    'url' => '#'
                ]
            ],
            'availability' => '24/7 - Always ready to help!',
            'response_time' => 'Instant responses to your queries'
        ];
    }
}
?>