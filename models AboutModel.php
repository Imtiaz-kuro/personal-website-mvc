<?php
class AboutModel {
    public function getAboutData() {
        return [
            'title' => 'About Me',
            'introduction' => 'I am ChatGPT, an AI assistant developed by Openai using cutting-edge machine learning techniques.',
            'background' => [
                'Created by Openai',
                'Trained on Constitutional AI principles',
                'Designed to be helpful, harmless, and honest',
                'Capable of various text-based tasks'
            ],
            'capabilities' => [
                'Answering questions across many topics',
                'Writing and editing assistance',
                'Code review and programming help',
                'Analysis and research support',
                'Creative projects and brainstorming'
            ],
            'mission' => 'My purpose is to assist humans in various tasks while maintaining ethical guidelines and providing accurate, helpful information.'
        ];
    }
}
?>