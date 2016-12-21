<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {


    public function login(){
        // 判断提交方式
        session_start();
                if (IS_POST) {
                    // 实例化Login对象
                    $login = D('users');
                    // 自动验证 创建数据集
                    if (!$data = $login->create()) {
                        // 防止输出中文乱码
                        header("Content-type: text/html; charset=utf-8");
                        exit($login->getError());
                    }
                    // 组合查询条件
                    $where = array();
                    $where['username'] = $data['username'];
                    $result = $login->where($where)->field('pid,username,password')->find();
                    // 验证用户名 对比 密码
                    if ($result && $result['password'] === $data['password']) {
                        // 存储session
                        session('uid', $result['pid']);          // 当前用户id
                        session('username', $result['username']);   // 当前用户名
                        // 更新用户登录信息
                        $where['pid'] = session('uid');  // 更新登录时间和登录ip
                        $this->redirect("Index/index");
                    } else {
                        $this->error('登录失败,用户名或密码不正确!',U('login/login'));
                    }
                } else {
                    $this->display();
                }
    }

    public function register()
    {
            // 判断提交方式 做不同处理
            if (IS_POST) {
                // 实例化User对象
                $user = D('users');
                // 自动验证 创建数据集
                if (!$data = $user->create()) {
                    // 防止输出中文乱码
                    header("Content-type: text/html; charset=utf-8");
                    exit($user->getError());
                }
                //插入数据库
                if ($id = $user->add($data)) {
                    $this->success('注册成功', U('Index/index'), 2);
                } else {
                    $this->error('注册失败');
                }
            } else {
                $this->display();
            }
    }

        public function logout()
        {
            // 清楚所有session
            session(null);
            redirect(U('Login/login'), 2, '正在退出登录...');
        }
        /**
         * 验证码
         */
        public function verify()
        {
            // 实例化Verify对象
            $verify = new \Think\Verify();
            // 配置验证码参数
            $verify->fontSize = 14;     // 验证码字体大小
            $verify->length = 4;        // 验证码位数
            $verify->imageH = 34;       // 验证码高度
            $verify->useImgBg = true;   // 开启验证码背景
            $verify->useNoise = false;  // 关闭验证码干扰杂点
            $verify->entry();
        }


}