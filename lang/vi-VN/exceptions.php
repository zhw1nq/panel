<?php

return [
    'daemon_connection_failed' => 'Đã có ngoại lệ khi cố gắng giao tiếp với daemon dẫn đến mã phản hồi HTTP/:code. Ngoại lệ này đã được ghi lại.',
    'node' => [
        'servers_attached' => 'Một node phải không có máy chủ nào được liên kết với nó để có thể bị xóa.',
        'error_connecting' => 'Lỗi kết nối đến :node',
        'daemon_off_config_updated' => 'Cấu hình daemon <strong>đã được cập nhật</strong>, tuy nhiên đã gặp lỗi khi cố gắng tự động cập nhật tệp cấu hình trên Daemon. Bạn cần thủ công cập nhật tệp cấu hình (config.yml) cho daemon để áp dụng những thay đổi này.',
    ],
    'allocations' => [
        'server_using' => 'Một máy chủ hiện đang được gán cho phân bổ này. Một phân bổ chỉ có thể bị xóa nếu không có máy chủ nào hiện đang được gán.',
        'too_many_ports' => 'Việc thêm hơn 1000 cổng trong một phạm vi duy nhất cùng lúc không được hỗ trợ.',
        'invalid_mapping' => 'Ánh xạ được cung cấp cho :port không hợp lệ và không thể được xử lý.',
        'cidr_out_of_range' => 'Ký hiệu CIDR chỉ cho phép mặt nạ giữa /25 và /32.',
        'port_out_of_range' => 'Cổng trong phân bổ phải lớn hơn hoặc bằng 1024 và nhỏ hơn hoặc bằng 65535.',
    ],
    'egg' => [
        'delete_has_servers' => 'Một Egg có máy chủ hoạt động được gắn với nó không thể bị xóa khỏi Panel.',
        'invalid_copy_id' => 'Egg được chọn để sao chép script từ đó không tồn tại, hoặc đang sao chép script chính nó.',
        'has_children' => 'Egg này là cha của một hoặc nhiều Egg khác. Vui lòng xóa những Egg đó trước khi xóa Egg này.',
    ],
    'variables' => [
        'env_not_unique' => 'Biến môi trường :name phải là duy nhất cho Egg này.',
        'reserved_name' => 'Biến môi trường :name được bảo vệ và không thể được gán cho một biến.',
        'bad_validation_rule' => 'Quy tắc xác thực ":rule" không phải là quy tắc hợp lệ cho ứng dụng này.',
    ],
    'importer' => [
        'json_error' => 'Đã có lỗi khi cố gắng phân tích tệp JSON: :error.',
        'file_error' => 'Tệp JSON được cung cấp không hợp lệ.',
        'invalid_json_provided' => 'Tệp JSON được cung cấp không ở định dạng có thể được nhận dạng.',
    ],
    'subusers' => [
        'editing_self' => 'Không được phép chỉnh sửa tài khoản subuser của chính bạn.',
        'user_is_owner' => 'Bạn không thể thêm chủ sở hữu máy chủ làm subuser cho máy chủ này.',
        'subuser_exists' => 'Một người dùng với địa chỉ email đó đã được gán làm subuser cho máy chủ này.',
    ],
    'databases' => [
        'delete_has_databases' => 'Không thể xóa máy chủ host cơ sở dữ liệu có cơ sở dữ liệu hoạt động được liên kết với nó.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'Thời gian khoảng cách tối đa cho một tác vụ chuỗi là 15 phút.',
    ],
    'locations' => [
        'has_nodes' => 'Không thể xóa một vị trí có node hoạt động được gắn với nó.',
    ],
    'users' => [
        'is_self' => 'Không thể xóa tài khoản người dùng của chính bạn.',
        'has_servers' => 'Không thể xóa người dùng có máy chủ hoạt động được gắn với tài khoản của họ. Vui lòng xóa máy chủ của họ trước khi tiếp tục.',
        'node_revocation_failed' => 'Không thể thu hồi khóa trên <a href=":link">Node #:node</a>. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Không tìm thấy node nào thỏa mãn các yêu cầu được chỉ định cho triển khai tự động.',
        'no_viable_allocations' => 'Không tìm thấy phân bổ nào thỏa mãn các yêu cầu cho triển khai tự động.',
    ],
    'api' => [
        'resource_not_found' => 'Tài nguyên được yêu cầu không tồn tại trên máy chủ này.',
    ],
    'mount' => [
        'servers_attached' => 'Một mount phải không có máy chủ nào được gắn với nó để có thể bị xóa.',
    ],
    'server' => [
        'marked_as_failed' => 'Máy chủ này chưa hoàn thành quá trình cài đặt, vui lòng thử lại sau.',
    ],
];
