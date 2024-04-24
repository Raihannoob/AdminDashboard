<?php
//
namespace App\Http\Controllers\Backend;

use Exception;
use App\Models\User;
use App\Helper\Helper;
use Illuminate\Http\Request;
use App\Models\SystemSetting;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;


class SystemSettingController extends Controller
{

    public function index()
    {
        $setting = SystemSetting::latest('id')->first();
        return view('backend.layout.system_setting.index', compact('setting'));
    }

    public function profileindex()
    {
        return view('backend.layout.system_setting.profile_setting');
    }
    /**
     * Update the system settings.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'system_name' => 'nullable',
            'address' => 'nullable',
            'support_email' => 'nullable',
            'description' => 'nullable',
            'contact' => 'nullable',
            'logo' => 'nullable',
            'favicon' => 'nullable',
            'copyright' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {

            $setting = SystemSetting::firstOrNew();
            $setting->system_name = $request->system_name;
            $setting->address = $request->address;
            $setting->support_email = $request->support_email;
            $setting->contact = $request->contact;
            $setting->description = $request->description;
            $setting->copyright = $request->copyright;

            if (!empty($request->file('logo'))) {
                if (empty($setting->logo)) {
                    $logo = Helper::fileUpload($request->file('logo'), 'setting', 'logo');
                } else {

                    @unlink(public_path('/') . $setting->logo);

                    $logo = Helper::fileUpload($request->file('logo'), 'setting', 'logo');
                }
                $setting->logo = $logo;
            }

            if (!empty($request->file('favicon'))) {
                if (empty($setting->favicon)) {
                    $favicon = Helper::fileUpload($request->file('favicon'), 'setting', 'favicon');
                } else {
                    @unlink(public_path('/') . $setting->favicon);

                    $favicon = Helper::fileUpload($request->file('favicon'), 'setting', 'favicon');
                }
                $setting->favicon = $favicon;
            }

            $setting->save();
            return back()->with('t-success', 'Updated successfully');
        } catch (Exception $e) {
            return back()->with('t-error', 'Failed to update');
        }
    }

    public function mailSetting()
    {
        if (User::find(auth()->user()->id)->hasPermissionTo('mail_setting')) {
            return view('backend.layout.system_setting.mailsetting');
        }
        return redirect()->back();
    }

    public function mailSettingUpdate(Request $request)
    {
        if (User::find(auth()->user()->id)->hasPermissionTo('mail_setting')) {
            $request->validate([
                'mail_mailer' => 'required|string',
                'mail_host' => 'required|string',
                'mail_port' => 'required|string',
                'mail_username' => 'nullable|string',
                'mail_password' => 'nullable|string',
                'mail_encryption' => 'nullable|string',
                'mail_from_address' => 'required|string',
            ]);
            try {
                $envContent = File::get(base_path('.env'));
                $lineBreak = "\n";
                $envContent = preg_replace([
                    '/MAIL_MAILER=(.*)\s/',
                    '/MAIL_HOST=(.*)\s/',
                    '/MAIL_PORT=(.*)\s/',
                    '/MAIL_USERNAME=(.*)\s/',
                    '/MAIL_PASSWORD=(.*)\s/',
                    '/MAIL_ENCRYPTION=(.*)\s/',
                    '/MAIL_FROM_ADDRESS=(.*)\s/',
                ], [
                    'MAIL_MAILER=' . $request->mail_mailer . $lineBreak,
                    'MAIL_HOST=' . $request->mail_host . $lineBreak,
                    'MAIL_PORT=' . $request->mail_port . $lineBreak,
                    'MAIL_USERNAME=' . $request->mail_username . $lineBreak,
                    'MAIL_PASSWORD=' . $request->mail_password . $lineBreak,
                    'MAIL_ENCRYPTION=' . $request->mail_encryption . $lineBreak,
                    'MAIL_FROM_ADDRESS=' . '"' . $request->mail_from_address . '"' . $lineBreak,
                ], $envContent);

                if ($envContent !== null) {
                    File::put(base_path('.env'), $envContent);
                }
                return back()->with('t-success', 'Updated successfully');
            } catch (Exception $e) {
                return back()->with('t-error', 'Failed to update');
            }
        }
        return redirect()->back();
    }
}
