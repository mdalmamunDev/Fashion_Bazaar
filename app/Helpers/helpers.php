<?php

use Illuminate\Support\Carbon;

if (!function_exists('truncateHtml')) {
    function truncateHtml($text, $maxLength)
    {
        if (strlen(strip_tags($text)) <= $maxLength) {
            return $text;
        }

        $truncated = '';
        $length = 0;
        $openTags = [];

        while ($length < $maxLength && preg_match('/<([a-z]+)([^>]*)>|<\/([a-z]+)>|([^<]+)/i', $text, $match, PREG_OFFSET_CAPTURE)) {
            if (!empty($match[1][0])) {
                // Opening tag
                $tag = $match[1][0];
                $truncated .= $match[0][0];
                $openTags[] = $tag;
            } elseif (!empty($match[3][0])) {
                // Closing tag
                $tag = array_pop($openTags);
                $truncated .= $match[0][0];
            } else {
                // Text content
                $content = substr($match[0][0], 0, $maxLength - $length);
                $length += strlen($content);
                $truncated .= $content;

                // If this is the last text segment, add the ellipsis
                if ($length >= $maxLength) {
                    $truncated .= '...';
                }
            }
            $text = substr($text, $match[0][1] + strlen($match[0][0]));
        }

        // Close any open tags
        while (!empty($openTags)) {
            $tag = array_pop($openTags);
            $truncated .= "</$tag>";
        }

        return $truncated;
    }
}


if (!function_exists('relativeTime')) {
    function relativeTime($time) {
        // Convert the input time to a Carbon instance if it's not already one
        if (!$time instanceof Carbon) {
            $time = Carbon::parse($time);
        }

        // Return the relative time in a human-readable format
        return $time->diffForHumans([
            'parts' => 1, // Limit to only one unit (e.g., '1m', '2h')
            'short' => true, // Use short versions (e.g., 'm' for minutes, 'h' for hours)
            'syntax' => Carbon::DIFF_ABSOLUTE, // Avoid "ago"
        ]);
    }
}



if (!function_exists('prepareUserActivity')) {
    /**
     * @param $activity
     * @return stdClass
     */
    function prepareUserActivity($activity)
    {
        if (!$activity) return null;

        $preAct = new stdClass();

        switch ($activity->type) {
            case 1:
                break;
            case 20:
                // testimonial
                $preAct->title = 'You sent a testimonial';
                $preAct->body = $activity->obj->content;
                break;
            default:
                // def logic
        }

        return $preAct;
    }
}

