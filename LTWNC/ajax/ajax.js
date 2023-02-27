// Biến dùng kiểm tra nếu đang gửi ajax thì ko thực hiện gửi thêm
var is_busy = false;
     
// Biến lưu trữ trang hiện tại
var page = 1;
 
// Số record trên mỗi trang
var record_per_page = 2;
 
// Biến lưu trữ rạng thái phân trang 
var stopped = false;
 
$(document).ready(function()
{
    // Khi kéo scroll thì xử lý
    $('#load_more').click(function()
    {
        // Element append nội dung
        $element = $('#content');
 
        // ELement hiển thị chữ loadding
        $button = $(this);
         
        // Nếu đang gửi ajax thì ngưng
        if (is_busy == true) {
            return false;
        }
         
        // Tăng số trang lên 1
        page++;
 
        // Hiển thị loadding ...
        $button.html('LOADDING ...');
 
        // Gửi Ajax
        $.ajax(
        {
            type: 'get',
            dataType: 'json',
            url: 'ajax/loadmore1.php',
            data: {page: page},
            success: function(result)
            {
                var html = '';
 
                // Trường hợp hết dữ liệu cho trang kế tiếp
                if (result.length <= record_per_page)
                {
                    // Lặp dữ liêụ
                    $.each(result, function (key, obj){
                        html += '<div class="p-b-63" >   <a href="blog-detail.html" class="hov-img0 how-pos5-parent">   <img src="./admin/photo/'+obj.anh+
                            ' "alt="IMG-BLOG">  <div class="flex-col-c-m size-123 bg9 how-pos5"><span class="stext-109 cl3 txt-center"> '+obj.ngay+
                            '</span> </div> </a><div class="p-t-32"> <h4 class="p-b-15"> <!-- 8 Inspiring Ways to Wear Dresses in the Winter -->'+obj.tieu_de+
                            '</a></h4><p class="stext-117 cl6">'+obj.noi_dung+
                            ' </p> <div class="flex-w flex-sb-m p-t-18"><span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10"> <span> <span class="cl4">By</span> '+obj.username+
                            ' <span class="cl12 m-l-4 m-r-6">|</span> </span><span>'+obj.the_loai+'<span class="cl12 m-l-4 m-r-6">|</span> </span> <span>8 Bình luận </span> </span> <a href="blog-detail.html" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10"> Xem bài viết<i class="fa fa-long-arrow-right m-l-9"></i> </a> </div> </div> </div>';

                    });
 
                    // Thêm dữ liệu vào danh sách
                    $element.append(html);
 
                    // Xóa button
                    $button.remove();
                }
                else{ // Trường hợp còn dữ liệu cho trang kế tiếp
                    // Lặp dữ liêụ, trường hợp này ta lặp bỏ đi phần record cuối cùng vì ta selec với limit + 1
                    $.each(result, function (key, obj){
                        if (key < result.length - 1){
                            html += '<div class="p-b-63" >   <a href="blog-detail.html" class="hov-img0 how-pos5-parent">   <img src="./admin/photo/'+obj.anh+
                            ' " alt="IMG-BLOG">  <div class="flex-col-c-m size-123 bg9 how-pos5"><span class="stext-109 cl3 txt-center"> '+obj.ngay+
                            '</span> </div> </a><div class="p-t-32"> <h4 class="p-b-15"> <!-- 8 Inspiring Ways to Wear Dresses in the Winter -->'+obj.tieu_de+
                            '</a></h4><p class="stext-117 cl6">'+obj.noi_dung+
                            ' </p> <div class="flex-w flex-sb-m p-t-18"><span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10"> <span> <span class="cl4">By</span> '+obj.username+
                            ' <span class="cl12 m-l-4 m-r-6">|</span> </span><span>Phong cách Đường phố, Thời trang, Cặp đôi  <span class="cl12 m-l-4 m-r-6">|</span> </span> <span>8 Bình luận </span> </span> <a href="blog-detail.html" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10"> Xem bài viết<i class="fa fa-long-arrow-right m-l-9"></i> </a> </div> </div> </div>';

                        }
                    });
 
                    // Thêm dữ liệu vào danh sách
                    $element.append(html);
                }
 
            }
        })
        .always(function()
        {
            // Sau khi thực hiện xong thì đổi giá trị cho button
            $button.html('XEM THÊM');
            is_busy = false;
        });
 
    });
});