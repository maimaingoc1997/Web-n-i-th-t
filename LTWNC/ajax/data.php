<?php
 
// Thiết lập kết quả trả về là html và charset là utf8 để khỏi lỗi font
header('Content-Type: text/html; charset=utf-8');
  
// Kết nối database
include_once('../admin/posts_connect.php');

  
// Lấy trang hiện tại
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
  
// Kiểm tra trang hiện tại có bé hơn 1 hay không
if ($page < 1) {
    $page = 1;
}
  
// Số record trên một trang
$limit = 2;
  
// Tìm start
$start = ($limit * $page) - $limit;
  
// Câu truy vấn
// Trong câu truy vấn này chúng ta sẽ lấy limit tăng lên 1
// Lý do là vì ta không có viết code đếm record nên dựa vào tổng số kết quả trả về để:
// - Nếu kết quả trả về bằng $limit + 1 thì còn phân trang
// - Nếu kết quả trả về bé hơn $limit + 1 thì nghĩa là hết dữ liệu nên ngưng phân trang
$sql = "select * from blog limit $start,".($limit + 1);
  
// Thực hiện câu truy vấn
$query = mysqli_query($conn, $sql) or die ('Lỗi câu truy vấn');
  
// Duyệt kết quả rồi đưa vào mảng result
$result = array();
while ($row = mysqli_fetch_array($query))
{
    // Thêm vào result
    array_push($result, $row);
}
 
// Nếu là request ajax thì trả kết quả JSON
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    // Mình sleep 1 giây để các bạn check nhé, khi sử dụng thì bỏ đoạn sleep này đi
    sleep(1);
     
    // Trả kết quả về cho ajax
    die (json_encode($result));
}
else // Ngược lại thì hiển thị bình thường. Trường hợp này dùng load trong file list.php
{
    $total = count($result);
    // Bỏ đi kết quả cuối cùng vì kết quả này dùng để check phân trang thôi
    for ($i = 0; $i < $total - 1; $i++)
    {
        echo '<div class="p-b-63">
                     <a href="blog-detail.html" class="hov-img0 how-pos5-parent">
                     <img src="./admin/photo/'.$row["anh"].'"  alt="IMG-BLOG">
            
                         <div class="flex-col-c-m size-123 bg9 how-pos5">
                             
            
                             <span class="stext-109 cl3 txt-center">
                             '.$row["ngay"].'
                             </span>
                         </div>
                     </a>
            
                     <div class="p-t-32">
                         <h4 class="p-b-15">
                        
                                 <!-- 8 Inspiring Ways to Wear Dresses in the Winter -->
                                '.$row["tieu_de"].'
                             </a>
                         </h4>
            
                         <p class="stext-117 cl6">
                         '.$row["noi_dung"].'									
                          </p>
            
                         <div class="flex-w flex-sb-m p-t-18">
                             <span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
                                 <span>
                                     <span class="cl4">By</span>  '.$row["username"].'	
                                     <span class="cl12 m-l-4 m-r-6">|</span>
                                 </span>
            
                                 <span>
                                     Phong cách Đường phố, Thời trang, Cặp đôi  
                                     <span class="cl12 m-l-4 m-r-6">|</span>
                                 </span>
            
                                 <span>
                                     8 Bình luận
                                 </span>
                             </span>
            
                             <a href="blog-detail.html" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
                                 Xem bài viết
            
                                 <i class="fa fa-long-arrow-right m-l-9"></i>
                             </a>
                         </div>
                     </div>
                 </div>';
    }
}
 
?>