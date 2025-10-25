<?php

return [
    'appsettings' => [
        'comment' => [
            'author' => 'Cung cấp địa chỉ email mà các egg được xuất bởi Panel này sẽ sử dụng. Đây phải là địa chỉ email hợp lệ.',
            'url' => 'URL ứng dụng PHẢI bắt đầu bằng https:// hoặc http:// tùy thuộc vào việc bạn có sử dụng SSL hay không. Nếu bạn không bao gồm scheme, email và nội dung khác sẽ liên kết đến vị trí sai.',
            'timezone' => "Múi giờ phải khớp với một trong các múi giờ được PHP hỗ trợ. Nếu bạn không chắc chắn, vui lòng tham khảo https://php.net/manual/en/timezones.php.",
        ],
        'redis' => [
            'note' => 'Bạn đã chọn driver Redis cho một hoặc nhiều tùy chọn, vui lòng cung cấp thông tin kết nối hợp lệ bên dưới. Trong hầu hết các trường hợp, bạn có thể sử dụng các giá trị mặc định được cung cấp trừ khi bạn đã thay đổi cài đặt.',
            'comment' => 'Theo mặc định, một instance Redis server có username là default và không có mật khẩu vì nó chạy cục bộ và không thể truy cập từ bên ngoài. Nếu đây là trường hợp, chỉ cần nhấn enter mà không nhập giá trị.',
            'confirm' => 'Có vẻ như :field đã được định nghĩa cho Redis, bạn có muốn thay đổi nó không?',
        ],
    ],
    'database_settings' => [
        'DB_HOST_note' => 'Chúng tôi khuyến nghị không sử dụng "localhost" làm host cơ sở dữ liệu vì chúng tôi đã thấy các vấn đề kết nối socket thường xuyên. Nếu bạn muốn sử dụng kết nối cục bộ, bạn nên sử dụng "127.0.0.1".',
        'DB_USERNAME_note' => "Sử dụng tài khoản root cho kết nối MySQL không chỉ bị phản đối mạnh mẽ mà còn không được phép bởi ứng dụng này. Bạn cần tạo một người dùng MySQL cho phần mềm này.",
        'DB_PASSWORD_note' => 'Có vẻ như bạn đã có mật khẩu kết nối MySQL được định nghĩa, bạn có muốn thay đổi nó không?',
        'DB_error_2' => 'Thông tin đăng nhập kết nối của bạn CHƯA được lưu. Bạn cần cung cấp thông tin kết nối hợp lệ trước khi tiếp tục.',
        'go_back' => 'Quay lại và thử lại',
    ],
    'make_node' => [
        'name' => 'Nhập một định danh ngắn để phân biệt node này với các node khác',
        'description' => 'Nhập mô tả để xác định node',
        'scheme' => 'Vui lòng nhập https cho SSL hoặc http cho kết nối không SSL',
        'fqdn' => 'Nhập tên miền (ví dụ node.example.com) để sử dụng kết nối với daemon. Địa chỉ IP chỉ có thể được sử dụng nếu bạn không sử dụng SSL cho node này',
        'public' => 'Node này có nên là công khai không? Lưu ý, việc đặt node thành riêng tư sẽ từ chối khả năng tự động triển khai đến node này.',
        'behind_proxy' => 'FQDN của bạn có đứng sau proxy không?',
        'maintenance_mode' => 'Có nên bật chế độ bảo trì không?',
        'memory' => 'Nhập lượng bộ nhớ tối đa',
        'memory_overallocate' => 'Nhập lượng bộ nhớ để phân bổ thừa, -1 sẽ tắt kiểm tra và 0 sẽ ngăn tạo máy chủ mới',
        'disk' => 'Nhập lượng dung lượng đĩa tối đa',
        'disk_overallocate' => 'Nhập lượng đĩa để phân bổ thừa, -1 sẽ tắt kiểm tra và 0 sẽ ngăn tạo máy chủ mới',
        'cpu' => 'Nhập lượng CPU tối đa',
        'cpu_overallocate' => 'Nhập lượng CPU để phân bổ thừa, -1 sẽ tắt kiểm tra và 0 sẽ ngăn tạo máy chủ mới',
        'upload_size' => 'Nhập kích thước tệp tải lên tối đa',
        'daemonListen' => 'Nhập cổng lắng nghe của daemon',
        'daemonConnect' => 'Nhập cổng kết nối của daemon (có thể giống với cổng lắng nghe)',
        'daemonSFTP' => 'Nhập cổng lắng nghe SFTP của daemon',
        'daemonSFTPAlias' => 'Nhập bí danh SFTP của daemon (có thể để trống)',
        'daemonBase' => 'Nhập thư mục cơ sở',
        'success' => 'Đã tạo thành công node mới với tên :name và có id là :id',
    ],
    'node_config' => [
        'error_not_exist' => 'Node đã chọn không tồn tại.',
        'error_invalid_format' => 'Định dạng được chỉ định không hợp lệ. Các tùy chọn hợp lệ là yaml và json.',
    ],
    'key_generate' => [
        'error_already_exist' => 'Có vẻ như bạn đã cấu hình khóa mã hóa ứng dụng. Tiếp tục quá trình này sẽ ghi đè khóa đó và gây ra lỗi dữ liệu cho bất kỳ dữ liệu được mã hóa hiện có nào. KHÔNG TIẾP TỤC TRỪ KHI BẠN BIẾT MÌNH ĐANG LÀM GÌ.',
        'understand' => 'Tôi hiểu hậu quả của việc thực hiện lệnh này và chấp nhận mọi trách nhiệm về việc mất dữ liệu được mã hóa.',
        'continue' => 'Bạn có chắc chắn muốn tiếp tục không? Thay đổi khóa mã hóa ứng dụng SẼ GÂY MẤT DỮ LIỆU.',
    ],
    'schedule' => [
        'process' => [
            'no_tasks' => 'Không có tác vụ được lên lịch cho máy chủ cần chạy.',
            'error_message' => 'Đã gặp lỗi khi xử lý Lịch trình: :schedules',
        ],
    ],
    'upgrade' => [
        'integrity' => 'Lệnh này không xác minh tính toàn vẹn của các tài sản đã tải xuống. Vui lòng đảm bảo rằng bạn tin tưởng nguồn tải xuống trước khi tiếp tục. Nếu bạn không muốn tải xuống kho lưu trữ, vui lòng chỉ ra điều đó bằng cách sử dụng cờ --skip-download, hoặc trả lời "không" cho câu hỏi bên dưới.',
        'source_url' => 'Nguồn tải xuống (đặt với --url=):',
        'php_version' => 'Không thể thực thi quá trình tự nâng cấp. Phiên bản PHP tối thiểu được yêu cầu là 7.4.0, bạn có :current',
        'skipDownload' => 'Bạn có muốn tải xuống và giải nén các tệp kho lưu trữ cho phiên bản mới nhất không?',
        'webserver_user' => 'Người dùng webserver của bạn đã được phát hiện là <fg=blue>[{:user}]:</> điều này có đúng không?',
        'name_webserver' => 'Vui lòng nhập tên của người dùng đang chạy quy trình webserver của bạn. Điều này khác nhau tùy theo hệ thống, nhưng thường là "www-data", "nginx", hoặc "apache".',
        'group_webserver' => 'Nhóm webserver của bạn đã được phát hiện là <fg=blue>[{:group}]:</> điều này có đúng không?',
        'group_webserver_question' => 'Vui lòng nhập tên của nhóm đang chạy quy trình webserver của bạn. Thông thường đây giống với người dùng của bạn.',
        'are_your_sure' => 'Bạn có chắc chắn muốn chạy quá trình nâng cấp cho Panel của bạn không?',
        'terminated' => 'Quá trình nâng cấp đã bị người dùng chấm dứt.',
        'success' => 'Panel đã được nâng cấp thành công. Vui lòng đảm bảo bạn cũng cập nhật các instance Daemon',

    ],
];
