@extends('client.layouts.master')
@section('title','Trang Chủ')

@section('main_content')
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
                margin: 0;
            }

            html {
                box-sizing: border-box;
            }

            *, *:before, *:after {
                box-sizing: inherit;
            }

            .column {
                float: left;
                width: 33.3%;
                margin-bottom: 16px;
                padding: 0 8px;
            }

            .card {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                margin: 8px;
            }

            .about-section {
                padding: 50px;
                text-align: center;
                background-color: #f5462a;
                color: white;
            }

            .container {
                padding: 0 16px;
            }

            .container::after, .row::after {
                content: "";
                clear: both;
                display: table;
            }

            .title {
                color: grey;
            }

            .button {
                border: none;
                outline: 0;
                display: inline-block;
                padding: 8px;
                color: white;
                background-color: #262424;
                text-align: center;
                cursor: pointer;
                width: 100%;
            }

            .button:hover {
                background-color: #555;
            }

            @media screen and (max-width: 650px) {
                .column {
                    width: 100%;
                    display: block;
                }
            }
        </style>
    </head>
    <body>

    <div class="about-section">
        <h1>Trang giới thiệu</h1>
        <p>Một số thông tin về website và website làm gì.</p>
    </div>

    <h2 style="text-align:center">Đội của chúng tôi</h2>
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="https://image-us.24h.com.vn/upload/2-2015/images/2015-06-22/1434977888-hivu13_wxzx.jpg" alt="Jane" style="width:100%">
                <div class="container">
                    <h2>Nguyễn Xuân Hinh</h2>
                    <p class="title">CEO & Founder</p>
                    <p>LH:0987465465</p>
                    <p>Xuanhinh@gmail.com</p>
                    <p>
                        <button class="button">Theo dõi</button>
                    </p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="https://sieupet.com/sites/default/files/cho-pug-bieu-cam_0.jpg" alt="Mike" style="width:100%">
                <div class="container">
                    <h2>Lê Thành Đạt
                        <h2>
                            <p class="title">Art Director</p>
                            <p>LH:098686123</p>
                            <p>Thanhdat@gmail.com</p>
                            <p>
                                <button class="button">Theo dõi</button>
                            </p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="https://anhdep123.com/wp-content/uploads/2021/02/hinh-anh-hai-huoc-ve-cho.jpg" alt="John" style="width:100%">
                <div class="container">
                    <h2>Nguyễn Mạnh Cường</h2>
                    <p class="title">Designer</p>
                    <p>LH:039988465</p>
                    <p>Vietcuong@gmail.com</p>
                    <p>
                        <button class="button">Theo dõi</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h2>1/ LỊCH SỬ HÌNH THÀNH VÀ PHÁT TRIỂN</h2>
        <p class="title">- Khởi nghiệp chắc chắn không phải là con đường chỉ toàn màu hồng. Song nó lại là con đường
            đáng để chúng ta gắn thân. Bởi vì trên con đường đó, chúng ta nhìn thấy đam mê và khát vọng của bản thân
            -
            dám sống thật với ước mơ của mình.
            - Chặng đường đó luôn ẩn chứa nhiều khó khăn nhưng cũng là một hành trình rất thú vị vì nó mang đến
            nhiều
            trải nghiệm quý giá.
            - Sau hơn 15 năm hoạt động, tuy phải trải qua những nốt thăng trầm. Nhưng với Niềm Tin Dùng và Sự Ủng Hộ
            Nhiệt Tình của hơn 2 triệu lượt Khách - Tập Thể Sun Mobile đã phần nào đạt được những mục tiêu và thành
            tựu
            nhất định. </p>
        <h2>2/ TẦM NHÌN – SỨ MỆNH – GIÁ TRỊ CỐT LÕI
            <h2>
                <p>2.1/ Tầm Nhìn</p>
                <p class="title">- Trở thành nhà bán lẻ mặt hàng công nghệ chính hãng có chất lượng và dịch vụ TOP 5
                    tại
                    khu vực Hà Nội đến năm 2025.
                    - Phát triển thương hiệu ngày càng lớn mạnh bằng cách Tập Trung “Nâng Tầm Dịch Vụ Khách Hàng” để
                    mang đến sự trải nghiệm một cách Hoàn Hảo Nhất</p>
                <p>2.2/ Sứ Mệnh</p>
                <p class="title">- Đối với Khách Hàng: Cung cấp các sản phẩm – dịch vụ đẳng cấp chất lượng đảm bảo,
                    giá
                    cạnh tranh, chế độ bảo hành uy tín. Các sản phẩm chủ đạo: Điện thoại, máy tính bảng, laptop,
                    điện
                    thoại cũ, phụ kiện điện thoại,...
                    - Đối với Đối Tác: Đề cao tinh thần hợp tác cùng phát triển; cam kết trở thành “Người đồng hành
                    số
                    1” của các đối tác, luôn gia tăng các giá trị đầu tư hấp dẫn và bền vững.
                    - Đối với Nhân Viên: Xây dựng môi trường làm việc chuyên nghiệp, năng động, sáng tạo và nhân
                    văn;
                    tạo điều kiện thu nhập cao và cơ hội phát triển công bằng cho tất cả nhân viên.
                    - Đối với Xã Hội: Hài hòa lợi ích doanh nghiệp với lợi ích xã hội; đóng góp tích cực vào các
                    hoạt
                    động hướng về cộng đồng, thể hiện tinh thần trách nhiệm công dân và niềm tự hào dân tộc.</p>
                <p>2.3/ Giá Trị Cốt Lõi</p>
                <p class="title">- Con người, sản phẩm và dịch vụ là 3 thứ luôn tồn tại song song để phát triển xã
                    hội.
                    Chính vì thế, Hnam luôn tập trung vào:
                    1. Con người: Đội ngũ nhân viên Tận Tâm - Trung Thực và Chia Sẻ cùng đóng góp để cùng công ty
                    ngày
                    một lớn mạnh.
                    2. Sản phẩm: Tất cả các loại sản phẩm luôn luôn đạt tình trạng tốt nhất khi giao đến tay khách
                    hàng.
                    3. Dịch vụ: Sự hài lòng cao nhất của khách hàng luôn luôn được đặt lên đầu tiên, trên cả lợi ích
                    của
                    công ty.</p>
                <h2>3/ GIẢI THƯỞNG VÀ DANH HIỆU
                    <h2>
                        <p class="title">Danh hiệu Top 500 website hàng đầu Việt Nam do Alexa thống kê - từ năm 2007
                            đến
                            2011
                            Danh hiệu Top 300 website hàng đầu Việt Nam do Alexa thống kê - từ năm 2012 đến 2014
                            Giải thưởng Đại lý tiêu biểu khu vực miền Nam của công ty Lenovo trao tặng - năm 2013
                            Giải thưởng Đại lý tiêu biểu của công ty OPPO Việt Nam trao tặng - năm 2013
                            Giải thưởng Đại lý bán lẻ sản phẩm dán màn hình, dán cường lực xuất sắc của công ty Tinh
                            Hoa
                            Việt
                            trao tặng - từ năm 2012 đến 2014
                            Giải thưởng Nhà bán lẻ xuất sắc khu vực miền Nam của công ty Samsung Việt Nam trao tặng
                            -
                            năm 2014
                            Giải thưởng Hỗ trợ dịch vụ xuất sắc của công ty Asus Việt Nam trao tặng - năm 2014
                            Giải thưởng Nhà bán hàng xuất sắc nhất của công ty Lazada Việt Nam trao tặng - quý
                            1/2015
                            Giải thưởng Đại lý bán lẻ chiến lược tốt nhất 2015 do Samsung Vietnam trao tặng - năm
                            2015
                            Giải thưởng SES đạt chỉ tiêu doanh thu cao nhất - 6 tháng đầu năm 2016 (SES: Cửa hàng
                            trải
                            nghiệm và
                            bán lẻ sản phẩm Samsung tại SC VivoCity - Q.7).
                            Giải thưởng Đại lý tiêu biểu 2016 (ngành hàng phụ kiện) do Sony Viet Nam trao tặng -
                            8/2016.
                            Giải thưởng "Best Nokia - Kênh bán lẻ tốt nhất" do Nokia Vietnam trao tặng – năm 2017.
                        </p>
    </div>
    </body>
    </html>
@endsection
