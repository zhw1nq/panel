<?php

return [
    'title' => 'Trình cài đặt Panel',
    'requirements' => [
        'title' => 'Yêu cầu máy chủ',
        'sections' => [
            'version' => [
                'title' => 'Phiên bản PHP',
                'or_newer' => ':version hoặc mới hơn',
                'content' => 'Phiên bản PHP của bạn là :version.',
            ],
            'extensions' => [
                'title' => 'Tiện ích mở rộng PHP',
                'good' => 'Tất cả các tiện ích mở rộng PHP cần thiết đã được cài đặt.',
                'bad' => 'Các tiện ích mở rộng PHP sau đây bị thiếu: :extensions',
            ],
            'permissions' => [
                'title' => 'Quyền thư mục',
                'good' => 'Tất cả các thư mục đều có quyền chính xác.',
                'bad' => 'Các thư mục sau có quyền sai: :folders',
            ],
        ],
        'exception' => 'Một số yêu cầu bị thiếu',
    ],
    'environment' => [
        'title' => 'Môi trường',
        'fields' => [
            'app_name' => 'Tên ứng dụng',
            'app_name_help' => 'Đây sẽ là tên của Panel của bạn.',
            'app_url' => 'URL ứng dụng',
            'app_url_help' => 'Đây sẽ là URL bạn truy cập Panel từ đó.',
            'account' => [
                'section' => 'Người dùng quản trị',
                'email' => 'E-Mail',
                'username' => 'Tên người dùng',
                'password' => 'Mật khẩu',
            ],
        ],
    ],
    'database' => [
        'title' => 'Cơ sở dữ liệu',
        'driver' => 'Driver cơ sở dữ liệu',
        'driver_help' => 'Driver được sử dụng cho cơ sở dữ liệu panel. Chúng tôi khuyến nghị "SQLite".',
        'fields' => [
            'host' => 'Host cơ sở dữ liệu',
            'host_help' => 'Host của cơ sở dữ liệu của bạn. Đảm bảo nó có thể truy cập được.',
            'port' => 'Cổng cơ sở dữ liệu',
            'port_help' => 'Cổng của cơ sở dữ liệu của bạn.',
            'path' => 'Đường dẫn cơ sở dữ liệu',
            'path_help' => 'Đường dẫn của tệp .sqlite của bạn tương đối với thư mục cơ sở dữ liệu.',
            'name' => 'Tên cơ sở dữ liệu',
            'name_help' => 'Tên của cơ sở dữ liệu panel.',
            'username' => 'Tên người dùng cơ sở dữ liệu',
            'username_help' => 'Tên của người dùng cơ sở dữ liệu của bạn.',
            'password' => 'Mật khẩu cơ sở dữ liệu',
            'password_help' => 'Mật khẩu của người dùng cơ sở dữ liệu của bạn. Có thể để trống.',
        ],
        'exceptions' => [
            'connection' => 'Kết nối cơ sở dữ liệu thất bại',
            'migration' => 'Migration thất bại',
        ],
    ],
    'session' => [
        'title' => 'Phiên làm việc',
        'driver' => 'Driver phiên làm việc',
        'driver_help' => 'Driver được sử dụng để lưu trữ phiên làm việc. Chúng tôi khuyến nghị "Filesystem" hoặc "Database".',
    ],
    'cache' => [
        'title' => 'Bộ nhớ đệm',
        'driver' => 'Driver bộ nhớ đệm',
        'driver_help' => 'Driver được sử dụng để lưu trữ bộ nhớ đệm. Chúng tôi khuyến nghị "Filesystem".',
        'fields' => [
            'host' => 'Host Redis',
            'host_help' => 'Host của máy chủ redis của bạn. Đảm bảo nó có thể truy cập được.',
            'port' => 'Cổng Redis',
            'port_help' => 'Cổng của máy chủ redis của bạn.',
            'username' => 'Tên người dùng Redis',
            'username_help' => 'Tên của người dùng redis của bạn. Có thể để trống',
            'password' => 'Mật khẩu Redis',
            'password_help' => 'Mật khẩu cho người dùng redis của bạn. Có thể để trống.',
        ],
        'exception' => 'Kết nối Redis thất bại',
    ],
    'queue' => [
        'title' => 'Hàng đợi',
        'driver' => 'Driver hàng đợi',
        'driver_help' => 'Driver được sử dụng để xử lý hàng đợi. Chúng tôi khuyến nghị "Database".',
        'fields' => [
            'done' => 'Tôi đã hoàn thành cả hai bước bên dưới.',
            'done_validation' => 'Bạn cần hoàn thành cả hai bước trước khi tiếp tục!',
            'crontab' => 'Chạy lệnh sau để thiết lập crontab của bạn. Lưu ý rằng <code>www-data</code> là người dùng webserver của bạn. Trên một số hệ thống, tên người dùng này có thể khác!',
            'service' => 'Để thiết lập dịch vụ queue worker, bạn chỉ cần chạy lệnh sau.',
        ],
    ],
    'exceptions' => [
        'write_env' => 'Không thể ghi vào tệp .env',
        'migration' => 'Không thể chạy migrations',
        'create_user' => 'Không thể tạo người dùng quản trị',
    ],
    'next_step' => 'Bước tiếp theo',
    'finish' => 'Hoàn thành',
];
