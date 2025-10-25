<?php

/**
 * Contains all of the translation strings for different activity log
 * events. These should be keyed by the value in front of the colon (:)
 * in the event name. If there is no colon present, they should live at
 * the top level.
 */
return [
    'auth' => [
        'fail' => 'Đăng nhập thất bại',
        'success' => 'Đã đăng nhập',
        'password-reset' => 'Đặt lại mật khẩu',
        'checkpoint' => 'Yêu cầu xác thực hai yếu tố',
        'recovery-token' => 'Đã sử dụng mã khôi phục hai yếu tố',
        'token' => 'Đã giải quyết thử thách hai yếu tố',
        'ip-blocked' => 'Đã chặn yêu cầu từ địa chỉ IP không được liệt kê cho <b>:identifier</b>',
        'sftp' => [
            'fail' => 'Đăng nhập SFTP thất bại',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'Đã thay đổi email từ <b>:old</b> thành <b>:new</b>',
            'password-changed' => 'Đã thay đổi mật khẩu',
        ],
        'api-key' => [
            'create' => 'Đã tạo khóa API mới <b>:identifier</b>',
            'delete' => 'Đã xóa khóa API <b>:identifier</b>',
        ],
        'ssh-key' => [
            'create' => 'Đã thêm khóa SSH <b>:fingerprint</b> vào tài khoản',
            'delete' => 'Đã xóa khóa SSH <b>:fingerprint</b> khỏi tài khoản',
        ],
        'two-factor' => [
            'create' => 'Đã bật xác thực hai yếu tố',
            'delete' => 'Đã tắt xác thực hai yếu tố',
        ],
    ],
    'server' => [
        'console' => [
            'command' => 'Đã thực thi "<b>:command</b>" trên máy chủ',
        ],
        'power' => [
            'start' => 'Đã khởi động máy chủ',
            'stop' => 'Đã dừng máy chủ',
            'restart' => 'Đã khởi động lại máy chủ',
            'kill' => 'Đã kết thúc quy trình máy chủ',
        ],
        'backup' => [
            'download' => 'Đã tải xuống bản sao lưu <b>:name</b>',
            'delete' => 'Đã xóa bản sao lưu <b>:name</b>',
            'restore' => 'Đã khôi phục bản sao lưu <b>:name</b> (đã xóa tệp: <b>:truncate</b>)',
            'restore-complete' => 'Đã hoàn thành khôi phục bản sao lưu <b>:name</b>',
            'restore-failed' => 'Không thể hoàn thành khôi phục bản sao lưu <b>:name</b>',
            'start' => 'Đã bắt đầu bản sao lưu mới <b>:name</b>',
            'complete' => 'Đã đánh dấu bản sao lưu <b>:name</b> là hoàn thành',
            'fail' => 'Đã đánh dấu bản sao lưu <b>:name</b> là thất bại',
            'lock' => 'Đã khóa bản sao lưu <b>:name</b>',
            'unlock' => 'Đã mở khóa bản sao lưu <b>:name</b>',
            'rename' => 'Đã đổi tên bản sao lưu từ "<b>:old_name</b>" thành "<b>:new_name</b>"',
        ],
        'database' => [
            'create' => 'Đã tạo cơ sở dữ liệu mới <b>:name</b>',
            'rotate-password' => 'Đã xoay mật khẩu cho cơ sở dữ liệu <b>:name</b>',
            'delete' => 'Đã xóa cơ sở dữ liệu <b>:name</b>',
        ],
        'file' => [
            'compress' => 'Đã nén <b>:directory:files</b>|Đã nén <b>:count</b> tệp trong <b>:directory</b>',
            'read' => 'Đã xem nội dung của <b>:file</b>',
            'copy' => 'Đã tạo bản sao của <b>:file</b>',
            'create-directory' => 'Đã tạo thư mục <b>:directory:name</b>',
            'decompress' => 'Đã giải nén <b>:file</b> trong <b>:directory</b>',
            'delete' => 'Đã xóa <b>:directory:files</b>|Đã xóa <b>:count</b> tệp trong <b>:directory</b>',
            'download' => 'Đã tải xuống <b>:file</b>',
            'pull' => 'Đã tải xuống tệp từ xa từ <b>:url</b> đến <b>:directory</b>',
            'rename' => 'Đã di chuyển/đổi tên <b>:from</b> thành <b>:to</b>|Đã di chuyển/đổi tên <b>:count</b> tệp trong <b>:directory</b>',
            'write' => 'Đã ghi nội dung mới vào <b>:file</b>',
            'upload' => 'Đã bắt đầu tải lên tệp',
            'uploaded' => 'Đã tải lên <b>:directory:file</b>',
        ],
        'sftp' => [
            'denied' => 'Đã chặn quyền truy cập SFTP do quyền hạn',
            'create' => 'Đã tạo <b>:files</b>|Đã tạo <b>:count</b> tệp mới',
            'write' => 'Đã sửa đổi nội dung của <b>:files</b>|Đã sửa đổi nội dung của <b>:count</b> tệp',
            'delete' => 'Đã xóa <b>:files</b>|Đã xóa <b>:count</b> tệp',
            'create-directory' => 'Đã tạo thư mục <b>:files</b>|Đã tạo <b>:count</b> thư mục',
            'rename' => 'Đã đổi tên <b>:from</b> thành <b>:to</b>|Đã đổi tên hoặc di chuyển <b>:count</b> tệp',
        ],
        'allocation' => [
            'create' => 'Đã thêm <b>:allocation</b> vào máy chủ',
            'notes' => 'Đã cập nhật ghi chú cho <b>:allocation</b> từ "<b>:old</b>" thành "<b>:new</b>"',
            'primary' => 'Đã đặt <b>:allocation</b> làm phân bổ máy chủ chính',
            'delete' => 'Đã xóa phân bổ <b>:allocation</b>',
        ],
        'schedule' => [
            'create' => 'Đã tạo lịch trình <b>:name</b>',
            'update' => 'Đã cập nhật lịch trình <b>:name</b>',
            'execute' => 'Đã thực thi thủ công lịch trình <b>:name</b>',
            'delete' => 'Đã xóa lịch trình <b>:name</b>',
        ],
        'task' => [
            'create' => 'Đã tạo tác vụ mới "<b>:action</b>" cho lịch trình <b>:name</b>',
            'update' => 'Đã cập nhật tác vụ "<b>:action</b>" cho lịch trình <b>:name</b>',
            'delete' => 'Đã xóa tác vụ "<b>:action</b>" cho lịch trình <b>:name</b>',
        ],
        'settings' => [
            'rename' => 'Đã đổi tên máy chủ từ "<b>:old</b>" thành "<b>:new</b>"',
            'description' => 'Đã thay đổi mô tả máy chủ từ "<b>:old</b>" thành "<b>:new</b>"',
            'reinstall' => 'Đã cài đặt lại máy chủ',
        ],
        'startup' => [
            'edit' => 'Đã thay đổi biến <b>:variable</b> từ "<b>:old</b>" thành "<b>:new</b>"',
            'image' => 'Đã cập nhật Docker Image cho máy chủ từ <b>:old</b> thành <b>:new</b>',
            'command' => 'Đã cập nhật lệnh khởi động cho máy chủ từ <b>:old</b> thành <b>:new</b>',
        ],
        'subuser' => [
            'create' => 'Đã thêm <b>:email</b> làm subuser',
            'update' => 'Đã cập nhật quyền subuser cho <b>:email</b>',
            'delete' => 'Đã xóa <b>:email</b> khỏi vai trò subuser',
        ],
        'crashed' => 'Máy chủ bị sập',
    ],
];
