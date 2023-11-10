# Task3-Prepare statement
## Ping
![image](https://github.com/4thuthu/Task3---prepare-statement/assets/146660348/d3498f2c-fe0b-4ed6-a170-4cb80ae7a3d7)


Lệnh ping chặn kí tự `&`, có thể dùng kí tự `|` để thực thi thêm một lệnh phía sau:


![image](https://github.com/4thuthu/Task3---prepare-statement/assets/146660348/5dffc204-368f-4994-9321-02272c71712f)


Nhập `|dir d:\` để xem nội dung ổ đĩa D.


![image](https://github.com/4thuthu/Task3---prepare-statement/assets/146660348/b8e2066c-f488-40b7-a2d5-1e912d2c1d86)



## Tracert
![image](https://github.com/4thuthu/Task3---prepare-statement/assets/146660348/a41ac272-4149-436b-b3f7-33189d63cebc)


Ở đây chặn kí tự `&` và cụm `secret`. Tương tự như trên, dùng `|dir d:\` để xem nội dung ổ D.


![image](https://github.com/4thuthu/Task3---prepare-statement/assets/146660348/5f81d265-b0b2-4182-b7f8-e9b85a42513f)


Ta thấy có thư mục "secret". Xem thử bên trong có gì với input `|dir d:\secret`, nhưng cụm "secret" bị chặn nên ta dùng `|dir d:\s"ecret`.


![image](https://github.com/4thuthu/Task3---prepare-statement/assets/146660348/26a69479-3ed3-40ae-80e0-1b4a6b141eeb)


Dùng lệnh `|type d:\s"e"cret\password.txt` để xem nội dung bên trong  file.


![image](https://github.com/4thuthu/Task3---prepare-statement/assets/146660348/89b938b1-a4da-4239-92fd-f325b33723ad)

