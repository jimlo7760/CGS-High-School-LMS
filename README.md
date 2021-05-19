<p align=center><img src="http://38.106.21.18:3000/repo-avatars/14-f2d9a2e1cc4c7f6b4a056d2ffe38758b" align=center width=200></p>

<h1 align=center>许丹阳学生管理操作系统</h1>

<h3 align=center>一切解释权不归许丹阳所有</h3>

## 设计稿

### 学生端

- [x] 注册用户
  - [x] 填写学生信息表
  - [x] 提交管理员
  - [x] 管理员审核
  - [x] 通过/信息填写有
- [x] 查询成绩
  - [x] 首页列出近期考试，每行可以列出考试信息（考试性质、科目分数等）
  - [x] 点击一项考试后，可以看见任课老师对学生每一个科目成绩的评价
- [x] 自动生成家校联系表
  - [x] 在成绩详细页面设置一个自动生成家校联系表页面（家校联系表的具体格式到时候Denial会再发模版）
  - [x] 可以生成word或者其他纸质打印格式，方便学生或学校进行打印
- [x] 更改选课
  - [x] 填写选课更改申请表
  - [x] 提交给管理员审核
  - [x] 通过/拒绝更改
- [x] 设置期末目标
  - [x] 填写期末目标分表
  - [x] 提交

### 用户功能（任课老师端）（任课老师将会与分层班级绑定，只能更改该班级学生的成绩，但可以查看全年级学生成绩以及选择该科目的学生成绩）

- [x] 查询成绩
  - [x] 输入框输入条形码或姓名 or 从授课班级的列表中选择学生
  - [x] 按下查询按钮
  - [x] 列出学生成绩信息
- [x] 录入成绩
  - [x] 输入学生姓名/条形码 or 从授课班级的列表中选择学生
  - [x] 输入成绩以及成绩评价
  - [x] 提交成绩评价表
- [x] 更改成绩或成绩评价
  - [x] 输入学生姓名/条形码 or 从授课班级的列表中选择学生
  - [x] 输入成绩或者成绩评价
  - [x] 提交修改后的成绩表
- [x] 创建分层班级
  - [x] 填写分层班级表
  - [x] 创建成功

### 用户功能（班主任端）（班主任只能更改本班学生信息，但可以查看全年级学生成绩）（班主任能更改学科成绩但不能更改学科评价）

- [x] 查询成绩
  - [x] 输入框输入条形码或姓名 or 从自己的行政班级的列表中选择学生
  - [x] 按下查询按钮
  - [x] 列出学生成绩信息
- [x] 更改成绩
  - [x] 输入学生姓名/条形码 or 从自己的行政班级的列表中选择学生
  - [x] 输入成绩
  - [x] 提交修改后的成绩表
- [x] 学生电子档案相关
  - [x] 目标大学
    - [x] 搜索学生（学生姓名搜索、条形码搜索、成绩段搜索、行政班搜索、目标大学搜索、分层班级搜索、【部门搜索】、违纪搜索）（后面五种检索方式可以做成下拉菜单形式）
      - [x] 查看目标大学
        - [x] 列出该大学的详细信息
      - [x] 更改/添加目标大学
        - [x] 输入大学信息表
        - [x] 提交更改
      - [x]  删除目标大学
        - [x] 删除确认框
        - [x] 删除/取消
  - [ ] 违纪记录
    - [x] 搜索学生（学生姓名搜索、条形码搜索、成绩段搜索、行政班搜索、目标大学搜索、分层班级搜索、【部门搜索】、违纪搜索）（后面五种检索方式可以做成下拉菜单形式）
      - [ ] 查看违纪记录
        - [ ] 选择查看时间段（可选），不选则全部列出
        - [ ] 列出违纪记录
    - [ ] 添加/更改违纪记录
      - [ ] 填写违纪表
      - [ ] 确认提交
    - [ ] 删除违纪
      - [ ] 选择删除时间段（可选），不选则全部列出
      - [ ] 列出违纪记录
      - [ ] 删除确认框
      - [ ] 删除/取消
  - [ ] 获奖记录
    - [x] 搜索学生（学生姓名搜索、条形码搜索、成绩段搜索、行政班搜索、目标大学搜索、分层班级搜索、【部门搜索】、违纪搜索）（后面五种检索方式可以做成下拉菜单形式）
      - [ ] 查看获奖记录
        - [ ] 选择查看时间段（可选），不选则全部列出
        - [ ] 列出获奖记录
      - [ ] 添加/更改获奖记录
        - [ ] 填写获奖记录表
        - [ ] 确认提交
      - [ ] 删除获奖记录
        - [ ] 选择删除时间段（可选），不选则全部列出
        - [ ] 列出获奖记录
        - [ ] 删除确认框
        - [ ] 删除/取消
- [x] 创建行政班
  - [x] 填写行政班表
  - [x] 创建成功

### 管理员功能（项目处端）

- [ ] 成绩相关
  - [ ] 搜索学生（学生姓名搜索、条形码搜索、成绩段搜索、行政班搜索、目标大学搜索、分层班级搜索、【部门搜索】、违纪搜索）（后面五种检索方式可以做成下拉菜单形式）
    - [ ] 更改学生成绩/成绩评价
      - [ ] 选择更改科目   
      - [ ] 输入更改后成绩/成绩评价
      - [ ] 提交成绩表
    - [ ] 录入学生成绩/成绩评级
      - [ ] 选择录入科目
      - [ ] 输入该科目成绩/成绩评价
      - [ ] 提交成绩表
    - [ ] 删除学生成绩/成绩评价
      - [ ] 选择删除科目
      - [ ] 确认删除提示框
      - [ ] 删除/取消
    - [ ] 查询学生成绩/成绩评价
      - [ ] 选择查询科目
      - [ ] 列出学生该科目的信息
  - [ ] 学生电子档案相关
    - [ ] 目标大学
      - [ ] 搜索学生（学生姓名搜索、条形码搜索、成绩段搜索、行政班搜索、目标大学搜索、分层班级搜索、【部门搜索】、违纪搜索）（后面五种检索方式可以做成下拉菜单形式）
        - [ ] 查看目标大学
          - [ ] 列出该大学的详细信息
        - [ ] 更改/添加目标大学
          - [ ] 输入大学信息表
          - [ ] 提交更改
        - [ ] 删除目标大学
          - [ ] 删除确认框
          - [ ] 删除/取消
    - [ ] 违纪记录
      - [ ] 搜索学生（学生姓名搜索、条形码搜索、成绩段搜索、行政班搜索、目标大学搜索、分层班级搜索、【部门搜索】、违纪搜索）（后面五种检索方式可以做成下拉菜单形式）
        - [ ] 查看违纪记录
          - [ ] 选择查看时间段（可选），不选则全部列出
          - [ ] 列出违纪记录
        - [ ] 添加/更改违纪记录
          - [ ] 填写违纪表
          - [ ] 确认提交
        - [ ] 删除违纪
          - [ ] 选择删除时间段（可选），不选则全部列出
          - [ ] 列出违纪记录
          - [ ] 删除确认框
          - [ ] 删除/取消
    - [ ] 获奖记录
      - [ ] 搜索学生（学生姓名搜索、条形码搜索、成绩段搜索、行政班搜索、目标大学搜索、分层班级搜索、【部门搜索】、违纪搜索）（后面五种检索方式可以做成下拉菜单形式）
        - [ ] 查看获奖记录
          - [ ] 选择查看时间段（可选），不选则全部列出
          - [ ] 列出获奖记录
        - [ ] 添加/更改获奖记录
          - [ ] 填写获奖记录表
          - [ ] 确认提交
        - [ ] 删除获奖记录
          - [ ] 选择删除时间段（可选），不选则全部列出
          - [ ] 列出获奖记录
          - [ ] 删除确认框
          - [ ] 删除/取消
  - [ ] 审核学生注册
    - [ ] 查看学生注册表
    - [ ] 通过/信息不符合
  - [ ] 添加老师
    - [ ] 填写老师信息表
    - [ ] 录入系统
  - [ ] 更改老师信息
    - [ ] 更改老师表
    - [ ] 录入系统
  - [ ] 创建考试
    - [ ] 填写考试信息表（内包含家校联系表的信息）
    - [ ] ​		创建成功
  - [ ] 创建分层班级
    - [ ] 填写分层班级表
    - [ ] 创建成功
  - [ ] 添加科目
    - [ ] 填写科目表
    - [ ] 添加成功
  - [ ] 更改选课
    - [ ] ​	搜索学生（学生姓名搜索、条形码搜索、成绩段搜索、行政班搜索、目标大学搜索、分层班级搜索、【部门搜索】、违纪搜索）（后面五种检索方式可以做成下拉菜单形式）
      - [ ] 选择需要更改的科目
      - [ ] 选择更改的目标科目
      - [ ] 提交更改，录入系统
  - [ ] 建立学生期末目标
    - [ ] 填写期末目标分表
    - [ ] 创建成功

