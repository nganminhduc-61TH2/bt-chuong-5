<?php 
// Tệp View CHỈ chứa HTML và logic hiển thị (echo, foreach) 
// Tệp View KHÔNG chứa câu lệnh SQL 
?> 
<!DOCTYPE html> 
<html lang="vi"> 
<head> 
 <meta charset="UTF-8"> 
 <title>PHT Chương 5 - MVC</title> 
 <style> 
 table { width: 100%; border-collapse: collapse; } 
 th, td { border: 1px solid #ddd; padding: 8px; } 
 th { background-color: #f2f2f2; } 
 </style> 
</head> 
<body> 
 <h2>Thêm Sinh Viên Mới (Kiến trúc MVC)</h2> 
  <?php if (!empty($message) && !empty($message_type)): ?>
        <p class="<?php echo htmlspecialchars($message_type); ?>">
            <?php echo htmlspecialchars($message); ?>
        </p>
    <?php endif; ?>
       
    <form method="post" action="index.php">
        <label for="ten_sinh_vien">Tên sinh viên</label>
        <input id="ten_sinh_vien" name="ten_sinh_vien" type="text" required>

        <label for="email">Email</label>
        <input id="email" name="email" type="email" required>

        <button type="submit">Thêm sinh viên</button>
    </form>
 <h2>Danh Sách Sinh Viên (Kiến trúc MVC)</h2> 
 <table> 
 <tr> 
 <th>ID</th> 
 <th>Tên Sinh Viên</th> 
 <th>Email</th> 
 <th>Ngày Tạo</th> 
 </tr> 
 <?php 
 // TODO 4: Dùng vòng lặp foreach để duyệt qua biến $danh_sach_sv 
 // (Biến $danh_sach_sv này sẽ được Controller truyền sang) 
 // Gợi ý: foreach ($danh_sach_sv as $sv) { ... } 
 if (!empty($danh_sach_sv) && is_array($danh_sach_sv)):
            foreach ($danh_sach_sv as $sv):
 // TODO 5: In (echo) các dòng <tr> và <td> chứa dữ liệu $sv 
 // Gợi ý: echo "<tr><td>" . htmlspecialchars($sv['id']) . 
 ?>
<tr>
                <td><?php echo htmlspecialchars($sv['id']); ?></td>
                <td><?php echo htmlspecialchars($sv['ten_sinh_vien']); ?></td>
                <td><?php echo htmlspecialchars($sv['email']); ?></td>
                <td><?php echo htmlspecialchars($sv['created_at']); ?></td>
            </tr>
 <?php
  endforeach;
        else:
        ?>
            <tr>
                <td colspan="4">Chưa có sinh viên nào.</td>
            </tr>
        <?php endif; 
 ?> 
 </table> 
</body> 
</html>