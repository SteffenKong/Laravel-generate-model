<?php
namespace Steffenkong\ModelCli;

use Illuminate\Console\Command;

/**
 * 模型自动生成脚手架
 */
class ModelCli extends Command
{
    /**
     * 命令名称及签名
     *
     * @var string
     */
    protected $signature = 'test-cli';

    /**
     * 命令描述
     *
     * @var string
     */
    protected $description = 'test-cli';

    /**
     * 创建命令
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 执行命令
     *
     */
    public function handle()
    {
        echo "123";
    }
}