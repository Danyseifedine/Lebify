<?php

namespace App\Console\Commands\Lebify\Auth\Update\UpdateJsFiles\Auth;

use App\Traits\CodeManipulationTrait;
use Illuminate\Console\Command;

class UpdateEmailFile extends Command
{

    use CodeManipulationTrait;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:email-js';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the email.js file with the provided code';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $loginJsFilePath = public_path('js/auth/email.js');

        $code = <<<'JS'
import { Toast } from '../common/base/messages/toast.js';
import { $SingleFormPostController } from '../common/core/controllers.js';
import { ENDPOINT, __API_CFG__ } from '../common/base/config/config.js';


const sendEmailConfig = {
    formSelector: '#send-email-form',
    buttonSelector: '#send-email-form button[type="submit"]',
    endpoint: `${__API_CFG__.BASE_URL}${ENDPOINT.AUTHENTICATION.FORGOT_PASSWORD}`,
    feedback: true,
    onSuccess: (res) => {
        Toast.showSuccessToast('', res.message);
    },
}

const sendEmail = new $SingleFormPostController(sendEmailConfig)
sendEmail.init();
JS;

        $this->addCodeToFile($loginJsFilePath, $code);
        $this->info('The email.js file has been updated successfully.');
    }
}