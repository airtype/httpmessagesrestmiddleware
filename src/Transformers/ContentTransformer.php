<?php

namespace HttpMessagesRestMiddleware\Transformers;

class ContentTransformer extends BaseTransformer
{
    public function transform(array $content)
    {
        return $content;
    }
}
