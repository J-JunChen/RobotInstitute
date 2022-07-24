东莞理工学院机器人学院官网：[机器人学院网站](http://robot.dgut.edu.cn/)
===
【注：由于学院缺少运维人员，网站已下架！】

涉及技术：PHP + MySQL +  JQuery + ajax + PHPMailer

项目背景：为了帮助宣传粤港机器人学院和方便学院成员之间学习资料共享，并且仿照微信公众号编辑器以方便宣传部同学进行新

闻编辑并发布。 

技术要点：

-	利用 JQuery 和 ajax 技术实现本地文件上传到服务器，并以文件路径名存储到 MySQL 中，解决了将文件以二进制数据流的形式存储在 MySQL 中，减轻数据库的存储压力。整理的博客：[ajax与php后台交互](https://blog.csdn.net/ccccc_jun/category_7417361.html?spm=1001.2014.3001.5482)

- 利用轻量级 summernote 富文本编辑器仿照微信公众号编辑器，解决了在后台写代码改文章格式的问题，带来了快速编辑的效果。独立整理的 summernote 模块链接：[summernote](https://github.com/J-JunChen/summernote)

- 使用 MySQL 数据库技术实现用户权限管理，并实现将文章内容存储在数据库中，减少服务器存储过多的静态页面。

- 利用 PHPMailer 实现邮箱用户注册、密码修改、找回密码等功能，并且支持管理员对所有用户成员进行一键邮件群发消息。独立整理的 PHPMailer 模块链接：[163PHPMailer](https://github.com/J-JunChen/163PHPMailer)

