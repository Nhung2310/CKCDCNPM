I.	TÀI LIỆU KĨ THUẬT – TECHNICAL DOCUMENTATION

1.	Sơ đồ hệ thống.

![image](https://github.com/user-attachments/assets/41e5fb59-ecc7-4ee4-abfb-dd5eafaf6070)

2.	Mô tả chi tiết thông số triển khai

-	VPS WordPress:
  
VPS WordPress là dịch vụ cho phép bạn cài đặt và quản lý trang web WordPress trên máy chủ ảo riêng (VPS). VPS cung cấp cho bạn nhiều quyền kiểm soát và khả năng tùy chỉnh hơn so với gói lưu trữ web chia sẻ thông thường, đồng thời mang lại hiệu suất và bảo mật tốt hơn

![image](https://github.com/user-attachments/assets/ef49a0aa-1666-4dea-9934-65d205fc2348)

-	VPS  Reverse Proxy:
  
VPS Reverse Proxy là việc sử dụng máy chủ ảo riêng (VPS) để làm máy chủ proxy ngược. Máy chủ proxy ngược hoạt động như một trung gian giữa máy khách và máy chủ web thực tế. Khi máy khách gửi yêu cầu đến trang web, yêu cầu sẽ được gửi đến máy chủ proxy ngược trước tiên. Máy chủ proxy ngược sau đó sẽ chuyển tiếp yêu cầu đến máy chủ web thực tế và trả về phản hồi cho máy khách.

![image](https://github.com/user-attachments/assets/f8349794-51fe-458d-af8f-5d64b21c0727)

-	Reverse Proxy:
  
Reverse Proxy (tạm dịch: Proxy ngược) là một loại máy chủ trung gian hoạt động như cầu nối giữa người dùng (client) và máy chủ web thực tế (backend server). Nó thường được đặt trước các máy chủ web để nhận yêu cầu từ người dùng, sau đó phân tích và chuyển tiếp yêu cầu đến máy chủ web phù hợp. Sau khi nhận được phản hồi từ máy chủ web, Reverse Proxy sẽ gửi lại cho người dùng.

![image](https://github.com/user-attachments/assets/ab85a188-485b-42e2-a7de-d391c1ceb75e)

-	CI / CD:

CI/CD là viết tắt của Continuous Integration/Continuous Deployment (Tích hợp liên tục/Triển khai liên tục). Đây là một phương pháp phát triển phần mềm nhằm tự động hóa quy trình phát triển và triển khai ứng dụng.

![image](https://github.com/user-attachments/assets/264e9760-7f08-4138-b165-cb67e8c3bea7)

II.	HƯỚNG DẪN CÀI ĐẶT – INSTALLATION GUIDE
1.	Giới thiệu
-	Tài liệu này hướng dẫn chi tiết quá trình triển khai một website tích hợp cả hệ quản trị nội dung (CMS) WordPress và nền tảng thương mại điện tử (E-commerce) WooCommerce trên máy chủ Vultr. Quá trình này sẽ được tự động hóa bằng GitHub Actions để đảm bảo tính liên tục và ổn định trong việc phát triển và triển khai.
2.	Yêu cầu hệ thống
-	VPS trên Vultr: Hai VPS bao gồm 1 Wordpress và 1 Unbutu 20.04 trở lên.
-	GitHub Repository: Lưu trữ mã nguồn Website Wordpress.
-	Local Computer: Thực hiện cấu hình.
3.	Các bước cài đặt VPS WordPress Website
-	Bước 1: Tạo SSH Key
ssh-keygen -t rsa -b 4096 -C trangnhung2311.mh@gmail.com nhập vào ấn enter liên tục đến khi ra kết quả

![image](https://github.com/user-attachments/assets/61857318-6870-4a06-a596-e7d7d852fa7a)

	Bước 2: Đăng ký Vultr và thêm SSH Key vào Vultr 
•	Vào trang quản trị Vultr.com để đăng ký tài khoản

![image](https://github.com/user-attachments/assets/48dfa9bb-ca6e-4358-a507-99fc67f2a434)

•	Sau khi đăng ký thì nhập mã code được gửi về gmail 

![image](https://github.com/user-attachments/assets/f5a14288-793a-4835-950a-bed4d135a6f4)

![image](https://github.com/user-attachments/assets/fd8c1f8f-a223-471c-9d0d-8d0f960240d4)

•	Sau đó đăng nhập với tài khoản vừa tạo được
•	Chọn Accont
•	Chọn SSH Keys

![image](https://github.com/user-attachments/assets/2c12b372-e515-42bc-b855-f8f1aed785d8)


•	Add SSH Key vừa tạo vào : Mở thư mục theo đường dẫn dẫn đến tệp id_rsa.pub để lấy SSH Key. 

![image](https://github.com/user-attachments/assets/a0fc2444-9f87-4ba1-a56e-96d4699c26a4)

![image](https://github.com/user-attachments/assets/e716cfb8-becf-4021-963e-007ad7e1b6d0)

![image](https://github.com/user-attachments/assets/8b25e6d7-173a-47b0-a6d9-de63f03a5763)

Bước 3: Tạo VPS WordPress

•	Vào trang quản trị Vultr.com
•	Chọn Dashboard -Chọn Computer

![image](https://github.com/user-attachments/assets/abfc7fc7-9dfb-4724-ab40-5c07a57585ce)

•	Chọn Deploy 
•	Cấu hình như bên dưới

![image](https://github.com/user-attachments/assets/01f9436c-8a3d-4ebd-94fd-a3fda8f5ac8a)

![image](https://github.com/user-attachments/assets/4396d9fc-6768-4cde-b760-878c65fc7dea)

![image](https://github.com/user-attachments/assets/085a9413-24c6-4c56-8362-116d8829dee8)

![image](https://github.com/user-attachments/assets/d7a1e7b1-e1ff-44d9-9a9b-cb093c214f58)

Bỏ chọn Auto Backup

![image](https://github.com/user-attachments/assets/d28cf1e5-da8a-4677-a8d8-488720e6e650)

![image](https://github.com/user-attachments/assets/043f8a5e-a8cb-47fd-b03f-21115a93b2cc)

![image](https://github.com/user-attachments/assets/5dfbf719-c5c9-4be1-8cc8-167747f10dc8)

Chọn Deploy Now chờ cài đặt xong -> Server details -> Chờ cho không còn dòng chữ này là ok (Refresh Trang)

-	Bước 4: Sử dụng FileZilla để theo dõi cấu trúc thư mục VPS WordPress và truyền tải file SSH Key tới VPS
  
•	Cài đặt FileZIilla: https://filezilla-project.org/

![image](https://github.com/user-attachments/assets/b779b1e9-13f1-4797-994c-9c2b6f4cb732)

•	Mở FileZilla → Site Manager → Cấu hình kết nối tới VPS như sau → Connect

![image](https://github.com/user-attachments/assets/c44dcc41-44fa-432d-bd99-2061c6bbc253)

Lấy tên và password ở đây :

![image](https://github.com/user-attachments/assets/68361ab6-d7bd-4448-b84a-91a9dfdf3a97)

Vậy là kết nối thành công.

![image](https://github.com/user-attachments/assets/5ddca6b3-253e-481c-a082-05222011bdb3)

•	Truyền SSH Key (Bao gồm 2 file id_rsa và id_rsa.pub) từ local computer (máy tạo SSH Key) sang VPS

![image](https://github.com/user-attachments/assets/0397d406-0758-4c3c-9334-8cfbf8e172b2)

Mở PowerShell or CMD -> ssh root@VPS_IP (Lưu ý VPS_IP là IP của VPS Server) ->Enter -> Yes -> Thành công nếu hiện ra như vậy

![image](https://github.com/user-attachments/assets/79f0da5a-55d5-4eb8-9ac3-21a5cb737064)



-	Bước 5: Truy cập vào trang WordPress Admin để cài đặt
•	Truy cập https://”IP_VPS”/wp-admiin/
•	Username và Password được hiện thị ở chi tiết VPS

![image](https://github.com/user-attachments/assets/24c589d0-bc69-44a0-a088-f2bf48bc1817)

Vào đây thêm WooCommerce 

![image](https://github.com/user-attachments/assets/c9f8c644-c85e-446f-a414-a3e6598d8cff)

Cấu hình WooCommerce sau khi cài đặt:

•	Thiết lập cửa hàng

Sau khi kích hoạt WooCommerce, bạn sẽ thấy trình hướng dẫn thiết lập (Setup Wizard). 

Địa chỉ cửa hàng:

Nhập địa chỉ thực tế của cửa hàng của bạn.
Chọn quốc gia/khu vực, địa chỉ, thành phố và mã bưu điện.

Ngành hàng:

Chọn loại sản phẩm bạn sẽ bán (ví dụ: vật lý, kỹ thuật số).

•	Chọn đơn vị tiền tệ

Đơn vị tiền tệ:
Chọn đơn vị tiền tệ bạn muốn sử dụng cho cửa hàng của mình. Điều này có thể được thiết lập trong quá trình thiết lập ban đầu hoặc sau đó trong WooCommerce > Settings > General.

•	Phương thức vận chuyển

Thiết lập vùng vận chuyển:

Chọn phương thức vận chuyển mà bạn muốn cung cấp (ví dụ: vận chuyển miễn phí, giá cố định).
Bạn có thể cấu hình chi tiết trong WooCommerce > Settings > Shipping.

Vận chuyển miễn phí:

Bạn có thể cung cấp vận chuyển miễn phí cho các đơn hàng trên một mức giá nhất định hoặc cho một số khu vực cụ thể.

•	Phương thức thanh toán

WooCommerce hỗ trợ nhiều phương thức thanh toán miễn phí như PayPal Standard, chuyển khoản ngân hàng trực tiếp và thanh toán khi nhận hàng (COD).

PayPal:

WooCommerce tích hợp sẵn PayPal. Bạn chỉ cần nhập địa chỉ email PayPal của mình để bắt đầu.
Truy cập WooCommerce > Settings > Payments > PayPal để cấu hình.

Chuyển khoản ngân hàng trực tiếp:

Khách hàng sẽ chuyển khoản tiền trực tiếp vào tài khoản ngân hàng của bạn.
Truy cập WooCommerce > Settings > Payments > Direct Bank Transfer để cấu hình.

Thanh toán khi nhận hàng (COD):

Khách hàng thanh toán khi nhận hàng.
Truy cập WooCommerce > Settings > Payments > Cash on Delivery để cấu hình.

-	Bước 6: Tạo GitHub Repository để lưu trữ mã nguồn website
  
•	Truy cập GitHub và tạo mới một Repository
•	Trong Setting của Repository đó chọn Deploy Keys

![image](https://github.com/user-attachments/assets/0324ec37-6e80-4ad0-bcb0-50d9828d8360)

•	Add deploy key (SSH Public Key): Key chúng ta sẽ copy dữ liệu từ file id_rsa.pub theo đường dẫn ở trên 

![image](https://github.com/user-attachments/assets/06b3be89-9a58-4537-ba23-37fc2d0b1b88)

Tương tự tạo với secrets với VPS_DEPLOY_KEY thì lấy dữ liệu ở file id_rsa còn Host và UsserName thì lấy dữ liệu trong WordPress vừa tạo

![image](https://github.com/user-attachments/assets/5e318440-5441-4ae7-a2c3-c2a819d1f872)

Bước 7: Đẩy mã nguồn Website lên Github Repository

•	Dùng SSH connect tới VPS, dùng Command Promt → Gõ lệnh “ssh root@”IP_VPS”, connect thành công sẽ như sau

![image](https://github.com/user-attachments/assets/82007739-d534-47eb-826a-3bcbdd033b5b)

•	Cài đặt Git trên VPS, gõ lệnh “sudo apt update” → “sudo apt install git” → “git version” để kiểm tra đã cài đặt thành công

![image](https://github.com/user-attachments/assets/fba76ef0-4320-4773-878e-f70e37616f7e)

![image](https://github.com/user-attachments/assets/08cca907-aaea-485d-9856-40031bab26d4)

![image](https://github.com/user-attachments/assets/725649f2-0ec2-493a-a173-f953c5bec1b4)

•	Di chuyển tới thư mục chứa mã nguồn Website, gõ lệnh “cd /var/www/html”

	Đăng nhập vào tài khoản GitHub

Đăng nhập vào tài khoản GitHub của bạn trên trình duyệt web.

	 Truy cập vào Settings của tài khoản GitHub

Nhấp vào biểu tượng hồ sơ (avatar) của bạn ở góc trên bên phải màn hình, sau đó chọn Settings trong menu dropdown.

	Chọn Personal access tokens

Trong thanh bên trái của trang Settings, chọn Developer settings.
Sau đó chọn Personal access tokens.

	Tạo personal access token mới

Nhấp vào Generate new token.
Đặt tên cho token để dễ nhớ (ví dụ: "Git operations from VPS").
Chọn các quyền truy cập cần thiết cho token của bạn. Ví dụ, bạn cần chọn ít nhất quyền repo (toàn bộ repository) hoặc public_repo (nếu repository của bạn là public).
Cuối cùng, nhấp vào Generate token.

	Sao chép personal access token

Sau khi token đã được tạo, sao chép nó. Lưu ý rằng token này sẽ chỉ hiển thị một lần duy nhất. Hãy chắc chắn sao chép và lưu nó lại một cách an toàn.

Thực hiện đẩy mã nguồn lên GitHub Repository, gõ lệnh “git init” → “git add .” → “git commit -m “Init” “ → “git remote add origin <Repo URL vừa tạo>” → “git branch -M main” → “git push -u origin main” → Kiểm tra xem đã Push thành công hay chưa.
	
 Bước 8: Dùng GitHub Actions tự động Deploy khi Push code vào main branch
 
•	Truy cập Repository GitHub
•	Actions → New Workflow → PHP Composer 

![image](https://github.com/user-attachments/assets/1fc5dea5-1c09-43dc-ad0d-8fd30e971acd)

•	Code tự động Deploy:

![image](https://github.com/user-attachments/assets/b293dc2f-fb28-4071-ad68-74fef5a0bf63)

•	Chọn Commit Chanes 

•	Cấu hình xong, bây giờ mỗi khi có code push vào main brach của GitHub Repository thì sẽ tự động Deploy lên VPS Server WordPress

4.	Các bước cài đặt VPS Unbutu - Reverse Proxy

-	Bước 1: Tạo VPS Unbutu - Reverse Proxy
  
•	Vô trang quản trị Vultr.com
•	Chọn Computer
•	Chọn Deploy 
•	Cấu hình như bên dưới
•	Chọn Deploy Now

![image](https://github.com/user-attachments/assets/6a0ef753-5d8f-4d3e-9c33-9b9267b10f77)

![image](https://github.com/user-attachments/assets/f1d96cdf-e48c-4834-a152-3367ace9e6ff)



Bước 2: Cấu hình sử dụng Nginx – Reverse Proxy

•	Dùng Command Promt kết nối SSH tới VPS 
•	Cài đặt Nginx: “sudo apt update” → “sudo apt install nginx”
•	Sửa File Default Config ở /etc/nginx/sites-available với server_name là VPS đòng vai trò Reverse Proxy, proxy_pass là địa chỉ IP VPS WordPress

•	Sau khi cấu hình xong thực hiện kiểm tra “sudo nginx -t “và khởi động lại Nginx “sudo systemctl restart nginx” 

-Bước 3: Chỉnh sửa WordPress Address (URL) và Site Address (URL) thành IP của Reverse -Proxy:

•	Truy cập trang quản trị WordPress Admin: <IP_VPS>/wp_admin
•	Chọn Setting → General
•	Chỉnh sửa WordPress Address (URL) và Site Address (URL) thành IP của Reverse -Proxy:

III.	HƯỚNG DẪN SỬ DỤNG – USER MANUAL

1.	Giới thiệu
   
Website này được thiết kế để mang đến cho bạn trải nghiệm mua sắm trực tuyến dễ dàng và thú vị. Dưới đây là hướng dẫn sử dụng website:

1. Khám phá cửa hàng:

•	Trang chủ: Hiển thị các sản phẩm mới nhất, nổi bật và các danh mục sản phẩm chính.
•	Giới thiệu: Giới thiệu về cửa hàng, thương hiệu và cam kết của chúng tôi.
•	Liên hệ: Thông tin liên hệ của cửa hàng, bao gồm địa chỉ, số điện thoại và email.

2. Tìm kiếm sản phẩm:

•	Thanh tìm kiếm: Nhập tên sản phẩm, thương hiệu hoặc từ khóa để tìm kiếm nhanh chóng.
•	Danh mục sản phẩm: Duyệt qua các danh mục sản phẩm như áo thun, quần jean, váy, v.v. để tìm kiếm sản phẩm mong muốn.
•	Bộ lọc: Lọc sản phẩm theo giá cả, kích thước, màu sắc và thương hiệu để thu hẹp kết quả tìm kiếm.

3. Xem thông tin sản phẩm:

•	Trang sản phẩm: Hiển thị hình ảnh sản phẩm, mô tả chi tiết, giá cả, kích thước và số lượng còn hàng.
•	Đánh giá: Đọc đánh giá của khách hàng khác về sản phẩm.
•	Bảng kích thước: Tham khảo bảng kích thước để chọn kích thước phù hợp.

4. Thêm sản phẩm vào giỏ hàng:

•	Chọn số lượng: Chọn số lượng sản phẩm bạn muốn mua.
•	Thêm vào giỏ hàng: Nhấp vào nút "Thêm vào giỏ hàng" để thêm sản phẩm vào giỏ hàng của bạn.
•	Xem giỏ hàng: Nhấp vào biểu tượng giỏ hàng để xem các sản phẩm bạn đã thêm.

5. Thanh toán:

•	Xem giỏ hàng: Kiểm tra lại các sản phẩm trong giỏ hàng, số lượng và giá cả.
•	Áp dụng mã giảm giá: Nhập mã giảm giá (nếu có) vào ô "Mã giảm giá".
•	Chọn phương thức thanh toán: Chọn phương thức thanh toán mong muốn như thanh toán trực tuyến, chuyển khoản ngân hàng hoặc thanh toán khi nhận hàng (COD).
•	Cung cấp thông tin thanh toán: Nhập thông tin thanh toán và địa chỉ giao hàng của bạn.
•	Hoàn tất thanh toán: Nhấp vào nút "Thanh toán" để hoàn tất đơn hàng.

6. Theo dõi đơn hàng:

•	Email xác nhận: Bạn sẽ nhận được email xác nhận đơn hàng sau khi thanh toán thành công.
•	Thông tin đơn hàng: Bạn có thể theo dõi trạng thái đơn hàng của mình bằng cách đăng nhập vào tài khoản và truy cập phần "Đơn hàng của tôi".

2.	Giao diện và thao tác sử dụng

-	Giao diện chính:
  
![image](https://github.com/user-attachments/assets/4a6badaa-4a0d-43c5-9e5a-fe1c7b9938f8)

	Thực hiện them sản phẩm vào giỏ hàng

 ![image](https://github.com/user-attachments/assets/35c817aa-74e6-4465-88b6-4b215ebc510a)

 ![image](https://github.com/user-attachments/assets/43182151-c4cd-4b9b-af79-89c2ecbd0e38)

![image](https://github.com/user-attachments/assets/d5383989-3cea-4468-85a6-408654f865df)

IV.	HƯỚNG DẪN QUẢN TRỊ - ADMINISTRATION GUIDE

1.	Giới thiệu
   
-	Tài liêu này hướng dẫn cách quản trị trang web WordPress bằng cách sử dụng WordPress Admin Panel, thao tác quản trị bao gồm thay đổi giao diện, thêm sản phẩm mới, thay đổi hình ảnh, giá, thông tin sản phẩm.

2.	Giao diện và thao tác quản trị
 	
-	Trang quản trị WordPress (WordPress Admin Page): là trung tâm điều khiển toàn bộ website WordPress từ nội dung giao diện đến chức năng và người dùng.
•	Truy cập http://<IP_VPS>/wp_admin để vào trang quản trị
•	Nhập thông tin tài khoản Admin

![image](https://github.com/user-attachments/assets/ae19c233-9d99-47e3-b937-748a8529ce7e)

•	Giao diện trang quản trị

![image](https://github.com/user-attachments/assets/bfa3b5a9-2431-4982-a84a-e6a5f9d65fdc)


-	Quản trị CMS Website: Dùng Plugin WooCommerce
  
•	Cài đặt và Active Plugin WooCommerce (Nếu chưa có)

![image](https://github.com/user-attachments/assets/f18e907f-0598-41ac-8223-5cfa75f6bf76)

•	Marketing

![image](https://github.com/user-attachments/assets/d89ad372-fb66-4687-b4e2-f40452b9d055)

•	Thay đổi giao diện

![image](https://github.com/user-attachments/assets/9610ce7c-2aca-4929-856f-6951fd40b4f6)

•	Quản lí sản phẩm

![image](https://github.com/user-attachments/assets/2e9288af-e367-472e-b132-de7d0898aabd)

•	Quản lí đơn hàng

![image](https://github.com/user-attachments/assets/98736195-45fa-4baa-b46b-50e984dbfddb)

•	Quản lí khách hàng

![image](https://github.com/user-attachments/assets/dd113cc9-3c04-4762-bdca-be888fa20105)

•	Báo cáo, tổng hợp

![image](https://github.com/user-attachments/assets/90165234-8513-4f1b-a2d1-ac2ad945dcb2)

TÀI LIỆU THAM KHẢO

[1] Vultr, "Deploy a New Server on Vultr," available: https://www.vultr.com/docs/deploy-new-server. [Accessed: 20-Jun-2024].
[2] Ubuntu, "Ubuntu Server Guide," available: https://ubuntu.com/server/docs. [Accessed: 20-Jun-2024].
[3] WordPress, "Installing WordPress," available: https://wordpress.org/support/article/how-to-install-wordpress/. [Accessed: 20-Jun-2024].
[4] GitHub, "Creating a new repository," available: https://docs.github.com/en/get-started/quickstart/create-a-repo. [Accessed: 20-Jun-2024].
[5] DigitalOcean, "How to Install Linux, Apache, MySQL, PHP (LAMP) stack on Ubuntu 20.04," available: https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-ubuntu-20-04. [Accessed: 20-Jun-2024].
[6] GitHub, "Connecting to GitHub with SSH," available: https://docs.github.com/en/authentication/connecting-to-github-with-ssh. [Accessed: 20-Jun-2024].




