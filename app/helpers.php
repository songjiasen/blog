<?php

/**
 * @param $data array obj string int bool 任何类型
 * @param string $filename 日志文件名
 * 生成一个和入口文件在一个目录的日志文件
 */
function errorLog($data , $filename='my'){
    error_log(
        "------".date("Y-m-d H:i:s")."------\n".print_r($data,1)."\n------".date("Y-m-d H:i:s")."------\n",
        3,
        $filename.'.log'
    );
}