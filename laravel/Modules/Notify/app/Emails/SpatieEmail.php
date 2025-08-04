<?php

declare(strict_types=1);

namespace Modules\Notify\Emails;

use Illuminate\Support\Arr;
<<<<<<< HEAD
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Modules\Xot\Datas\XotData;
use Modules\Xot\Datas\MetatagData;
use function Safe\file_get_contents;
use Illuminate\Support\Facades\File;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailables\Envelope;
use Modules\Notify\Models\MailTemplate;
use Illuminate\Mail\Mailables\Attachment;

use Spatie\MailTemplates\TemplateMailable;
use Modules\Xot\Actions\Model\GetSicureArrayByModelAction;
use Spatie\MailTemplates\Interfaces\MailTemplateInterface;
=======
use Modules\Xot\Datas\MetatagData;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Models\MailTemplate;
use Illuminate\Mail\Mailables\Attachment;
use Modules\Xot\Datas\XotData;
use Spatie\MailTemplates\TemplateMailable;
>>>>>>> 54f4fa16 (.)

/**
 * @see https://github.com/spatie/laravel-database-mail-templates
 */
class SpatieEmail extends TemplateMailable
{
    // use our custom mail template model
<<<<<<< HEAD
    /** @var class-string<MailTemplateInterface> */
    protected static  $templateModelClass = MailTemplate::class;
    public string $slug;
     /** @var array<int, Attachment> */
    protected array $customAttachments = [];

    public array $data=[];
    
    /**
     * The email recipient
     */
    protected ?string $recipient = null;

    

    public function __construct(Model $record, string $slug)
    {
        $this->slug = Str::slug($slug);
        
        $tpl=MailTemplate::firstOrCreate([
            'mailable' => SpatieEmail::class,
            'slug' => $this->slug,
        ],[
            'subject' => 'Benvenuto, {{ first_name }}',
            'html_template' => '<p>Gentile {{ first_name }} {{ last_name }},</p><p>La tua registrazione  è in attesa di approvazione. Ti contatteremo presto.</p>['.$this->slug.']',
            'text_template' => 'Gentile {{ first_name }} {{ last_name }}, la tua registrazione  è in attesa di approvazione. Ti contatteremo presto.['.$this->slug.']',
            'sms_template' => 'Gentile {{ first_name }} {{ last_name }}, la tua registrazione  è in attesa di approvazione. Ti contatteremo presto.['.$this->slug.']'
        ]);

        $tpl->increment('counter');
        
        $data = app(GetSicureArrayByModelAction::class)->execute($record);
        $this->data['login_url']=route('login');
        $this->data['site_url']=url('/');

        $this->data['logo_header']=MetatagData::make()->getBrandLogo();
        $this->data['logo_header_base64']=MetatagData::make()->getBrandLogoBase64();
        
        $this->data=array_merge($this->data,$data);
        $this->setAdditionalData($this->data);
        

    }

    public function mergeData(array $data): self
    {
        $this->data=array_merge($this->data,$data);
        $this->setAdditionalData($this->data);
        $params=implode(',',array_keys($this->data));
        MailTemplate::where(['slug'=>$this->slug,'mailable'=>SpatieEmail::class])->update(['params'=>$params]);
        return $this;
    }

    /**
     * Set the email recipient.
     *
     * @param string $email
     * @return self
     */
    public function setRecipient(string $email): self
    {
        $this->recipient = $email;
        return $this;
    }

    /**
     * Get the message envelope.
     *
     * @return Envelope
     */
    public function envelope(): Envelope
    {
        $envelope = new Envelope();
        
        // Set the recipient if available
        if ($this->recipient) {
            $envelope->to($this->recipient);
        }
        
        return $envelope;
=======
    protected static $templateModelClass = MailTemplate::class;
    public string $slug;
     /** @var array<int, Attachment> */
    protected array $customAttachments = [];

    public array $data=[];

    public function __construct(Model $record, string $slug)
    {
        MailTemplate::firstOrCreate([
            'mailable' => SpatieEmail::class,
            'slug' => $slug,
        ],[
            'subject' => 'Benvenuto, {{ first_name }}',
            'html_template' => '<p>Gentile {{ first_name }} {{ last_name }},</p><p>La tua registrazione  è in attesa di approvazione. Ti contatteremo presto.</p>',
            'text_template' => 'Gentile {{ first_name }} {{ last_name }}, la tua registrazione  è in attesa di approvazione. Ti contatteremo presto.'
        ]);
        $data=$record->toArray();
        $this->data=array_merge($this->data,$data);
        $this->setAdditionalData($this->data);
        $this->slug = $slug;

>>>>>>> 54f4fa16 (.)
    }

    public function mergeData(array $data): self
    {
        $this->data=array_merge($this->data,$data);
        $this->setAdditionalData($this->data);

        return $this;
    }

    public function getHtmlLayout(): string
    {
        //$pathToLayout = storage_path('mail-layouts/main.html');

        //return file_get_contents($pathToLayout);
        /**
         * In your application you might want to fetch the layout from an external file or Blade view.
         *
         * External file: `return file_get_contents(storage_path('mail-layouts/main.html'));`
         *
         * Blade view: `return view('mailLayouts.main', $data)->render();`
         */
        //$pathToLayout = module_path('Notify','resources/mail-layouts/base/responsive.html');
        //dddx(MetatagData::make()->toArray());
<<<<<<< HEAD
<<<<<<< HEAD
        $xot=XotData::make();
        $pub_theme=$xot->pub_theme;
        $pubThemePath=base_path('Themes/'.$pub_theme.'');

        //$pathToLayout = module_path('Notify','resources/mail-layouts/base.html');
        $pathToLayout = $pubThemePath.'/resources/mail-layouts/base.html';
=======


        $pathToLayout = module_path('Notify','resources/mail-layouts/base.html');
>>>>>>> 54f4fa16 (.)
=======
        $xot=XotData::make();
        $pub_theme=$xot->pub_theme;
        $pubThemePath=base_path('Themes/'.$pub_theme.'');

        //$pathToLayout = module_path('Notify','resources/mail-layouts/base.html');
        $pathToLayout = $pubThemePath.'/resources/mail-layouts/base.html';
>>>>>>> 85c2afe6 (✨ (SpatieEmail.php): add dynamic theme support for email layout path to enhance customization)
        return file_get_contents($pathToLayout);

        //return '<header>Site name!</header>{{{ body }}}<footer>Copyright 2018</footer>';
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

<<<<<<< HEAD

    public function getAttachmentFromPath(array $attachment): Attachment
    {
        $res = Attachment::fromPath($attachment['path']);
        $info = pathinfo($attachment['path']);
        $filename = $attachment['as'] ?? $info['basename'];
        $mime = $attachment['mime'] ?? File::mimeType($attachment['path']);

        $res = $res
            ->as($filename)
            ->withMime($mime);
        return $res;
    }

    public function getAttachmentFromData(array $attachment): Attachment
    {
        $res = Attachment::fromData(fn () => $attachment['data']);
        $as = $attachment['as'];
        

        $mime = Arr::get($attachment,'mime',null); //?? File::mimeType($as);   file vuole un file esistente
        $info = pathinfo($attachment['as']);
        if($mime==null && isset($info['extension'])){
            $mime = Arr::first(\Symfony\Component\Mime\MimeTypes::getDefault()->getMimeTypes($info['extension']));
        }
        if($mime==null){
            $mime='application/octet-stream';
        }
        Assert::string($mime);            

        $res = $res
            ->as($as)
            ->withMime($mime);
        return $res;
    }

=======
>>>>>>> 54f4fa16 (.)
    /**
     * Add attachments to the email
     *
     * @param array<int, array<string, string>> $attachments Array of attachment data
     * @return self
     */
    public function addAttachments(array $attachments): self
    {
<<<<<<< HEAD
        
        $attachmentObjects = [];

        foreach ($attachments as $item) {
            $attachment=null;
            if (isset($item['path']) && file_exists($item['path'])) {
                $attachment=$this->getAttachmentFromPath($item);
            }

            if($attachment==null && isset($item['data'])){
                $attachment=$this->getAttachmentFromData($item);
            }
            
            if ($attachment) {
                $attachmentObjects[] = $attachment;
            }
        }

        $this->customAttachments = $attachmentObjects;
        

=======
        $attachmentObjects = [];

        foreach ($attachments as $item) {
            if (!isset($item['path']) || !file_exists($item['path'])) {
                continue;
            }

            $attachment = Attachment::fromPath($item['path']);

            if (isset($item['as'])) {
                $attachment = $attachment->as($item['as']);
            }

            if (isset($item['mime'])) {
                $attachment = $attachment->withMime($item['mime']);
            }

            $attachmentObjects[] = $attachment;
        }

        $this->customAttachments = $attachmentObjects;
<<<<<<< HEAD
        
>>>>>>> 54f4fa16 (.)
=======

>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)
        return $this;
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
<<<<<<< HEAD
        
        return $this->customAttachments;
    }


    public function buildSms():string{
        /**@phpstan-ignore method.notFound */
        $sms_template=$this->getMailTemplate()->getAttributeValue('sms_template');
        $mustache= app(\Mustache_Engine::class); 
        $sms = $mustache->render(
            $sms_template,
            $this->data
        );

        
        return $sms;
    }
=======
        return $this->customAttachments;
    }
>>>>>>> 54f4fa16 (.)
}
