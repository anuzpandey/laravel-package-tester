<?php

use Anuzpandey\LaravelNepaliDate\LaravelNepaliDate;
use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    $startTime = microtime(true);

    $engDate = '1996-04-22';
    $nepdate = '2053-11-18';
    $format = 'D, jS F Y';

    $nepali_result = LaravelNepaliDate::from($engDate)->toNepaliDate($format);
    $english_result = LaravelNepaliDate::from($nepdate)->toEnglishDate($format);

    $endTime = microtime(true);
    $executionTime = ($endTime - $startTime);

    // check total memory usage
    $memoryUsage = memory_get_usage();
    $memoryUsage = $memoryUsage / 1024 / 1024;
    $memoryUsage = round($memoryUsage, 2);

    return [
        'engDate' => $engDate,
        'nepali_result' => $nepali_result,
        'separator_0' => '-------------------------',
        'nepdate' => $nepdate,
        'english_result' => $english_result,
        'separator_1' => '-------------------------',
        'format' => $format,
        'executionTime' => $executionTime . ' seconds',
        'memoryUsage' => $memoryUsage . ' MB',
    ];
});

//Route::get('test-multiples', function () {
//    $englishDates = [
//        '1996-04-22',
//        '1996-04-21',
//        '1996-04-20',
//        '1996-04-19',
//        '1996-04-18',
//        '1996-04-17',
//        '1996-04-16',
//        '1996-04-15',
//        '1996-04-14',
//        '1996-04-13',
//        '1996-04-13',
//        '1996-04-22',
//        '1996-04-21',
//        '1996-04-20',
//        '1996-04-19',
//        '1996-04-18',
//        '1996-04-17',
//        '1996-04-16',
//        '1996-04-15',
//        '1996-04-14',
//        '1996-04-13',
//        '1996-04-13',
//        '1996-04-22',
//        '1996-04-21',
//        '1996-04-20',
//        '1996-04-19',
//        '1996-04-18',
//        '1996-04-17',
//        '1996-04-16',
//        '1996-04-15',
//        '1996-04-14',
//        '1996-04-13',
//        '1996-04-13',
//        '1996-04-22',
//        '1996-04-21',
//        '1996-04-20',
//        '1996-04-19',
//        '1996-04-18',
//        '1996-04-17',
//        '1996-04-16',
//        '1996-04-15',
//        '1996-04-14',
//        '1996-04-13',
//        '1996-04-13',
//    ];
//
//    $nepaliDates = [
//        '2053-11-18',
//        '2053-11-17',
//        '2053-11-16',
//        '2053-11-15',
//        '2053-11-14',
//        '2053-11-13',
//        '2053-11-12',
//        '2053-11-11',
//        '2053-11-10',
//        '2053-11-09',
//        '2053-11-09',
//    ];
//
//    $format = 'D, jS F Y';
//    $results = [];
//
//    foreach ($englishDates as $engDate) {
////        foreach ($nepaliDates as $nepDate) {
//        $startTime = microtime(true);
//
//        $nepali_result = LaravelNepaliDate::from($engDate)->toNepaliDate($format);
////            $english_result = LaravelNepaliDate::from($nepDate)->toEnglishDate($format);
//
//        $endTime = microtime(true);
//        $executionTime = ($endTime - $startTime);
//
//        // check memory usage
//        $memoryUsage = memory_get_peak_usage();
//        $memoryUsage = $memoryUsage / 1024 / 1024;
//        $memoryUsage = round($memoryUsage, 2);
//
//        $results[] = [
//            'engDate' => $engDate,
//            'nepali_result' => $nepali_result,
//            'separator_0' => '-------------------------',
////                'nepdate' => $nepDate,
////                'english_result' => $english_result,
//            'separator_1' => '-------------------------',
//            'format' => $format,
//            'executionTime' => $executionTime . ' seconds',
//            'memoryUsage' => $memoryUsage,
//        ];
//    }
////    }
//
//    return [
//        'totalMemoryUsages' => collect($results)->pluck('memoryUsage')->sum() . ' MB',
//        'results' => $results
//    ];
//});
