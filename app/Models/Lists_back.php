<?php
namespace App\Models;

class Lists {
    public static function getAll() {
        return [
            [
                'idx' => 1,
                'subject' => '첫번째 콘텐츠',
                'contents' => '여기가 본문입니다.'
            ],
            [
                'idx' => 2,
                'subject' => '두번째 콘텐츠',
                'contents' => '여기가 두번째 본문입니다.'
            ]
        ];
    }

    public static function getOne($idx) {
        $lists = self::getAll();

        if (count($lists) <= 0) {
            return [];
        }

        $result = [];
        foreach ($lists as $row) {
            if (array_key_exists('idx', $row) == false) {
                $result = [];
                break;
            } else {
                $result = $row;
            }
        }

        return $result;
    }
}