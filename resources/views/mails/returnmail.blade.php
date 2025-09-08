<html>
    <body style="margin: 0;background-color:#fff!important;display: flex;align-items: center;justify-content: center;width:60%;height: 110vh;margin-left: 20%;margin-top: 1rem;margin-bottom: 1rem;overflow: scroll;">
        <div class="background" style="padding: 1rem;border-color:black; border-widht:1px;border: ridge;">
            <div class="header" style="background:url('{{asset('assets/images/career-return-mail-banner.png')}}'); background-repeat:round;">
                <div style="text-align: center;">
                    <img src="{{asset('assets/images/skyraan-logo-657e9a29edccb.png')}}" style="width: 20%;padding-top: 1rem;margin-right: 1.5rem;"/>
                    <div class=""><img src="{{asset('assets/images/thank-you-mail-img.png')}}" style="width: 30%;height:80px;"/></div>
                    <div class="" style="color: #bcbcbc;margin-top: -20px;padding-bottom: 3rem;font-family: math;font-size: 12px;">For Applying this job</div>
                </div>
            </div>
            <div style="padding-right: 2.5rem;padding-left: 2.5rem;">
                <div style="padding-top:1rem;padding-bottom:1rem;">Dear {{$contact->name}},</div>
                <div style="padding-bottom:1rem;line-height: 1.6;font-family: math;text-align: justify;">We appreciate your patience during this process and wish you the best of luck. Skyraan Technologies offers exciting opportunities, and we look forward to the possibility of working together.</div>
                <div style="padding-bottom:0.5rem;font-family: math;">Best Regards,</div>
                <div style="padding-bottom:0.5rem;font-family: math;">Skyraan Recruitment Team</div>
                <div style="padding-bottom:1rem;font-family: math;">Jai Agro Machinery</div>
            </div>
            <div style="border: 0px!important;border-radius: 0px!important;padding: 1rem;background-color:#F1F6FF;">
                <div style="display: flex!important;justify-content: center!important;align-items: center!important;">
                    <div style="font-size: 12px;color: #6a6a6a !important;font-family: system-ui;padding-left: 1rem;">+91 12345 12345</div>
                    <div style="font-size: 12px;color: #6a6a6a !important; padding-left: 2.5rem;padding-right: 2.5rem;">|</div>
                    <div><a href="mailto:info@skyraan.com" style="font-size: 12px;color: #6a6a6a !important;font-family: system-ui;text-decoration: double;">JaiAgriagro@gmail.com</a></div>
                    <div style="font-size: 12px;color: #6a6a6a !important; padding-left: 2.5rem;padding-right: 2.5rem;">|</div>
                    <div><a href="{{url('/')}}" style="font-size: 12px;color: #6a6a6a !important;font-family: system-ui;text-decoration: double;float: end; padding-right: 1rem;">www.jaiagro.com</a></div>
                </div>
            </div>
        </div>
    </body>
</html>