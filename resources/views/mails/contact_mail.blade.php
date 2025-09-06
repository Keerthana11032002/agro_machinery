<html>
    <head>
        <title>Jai Agro Machine Contact Message</title>
        <style>
            body{
                font-family: system-ui;
                margin:unset !important;
                background: #efeded;
                position: relative;
            }
            body::after {
                content: "";
                background: url("https://biblereadingzone.skyraan.net/assets/olybible/mail_temp/top-right-bg-img.png");
                background-repeat: no-repeat;
                background-position: right top;
                background-size: 15% 40%;
                opacity: 0.7;
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
            }
            body::before {
                content: "";
                background: url("https://biblereadingzone.skyraan.net/assets/olybible/mail_temp/btm-left-bg-img.png");
                background-repeat: no-repeat;
                background-position: left bottom;
                background-size: 20% 35%;
                opacity: 0.7;
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                height: 100%;
            }
            .setbg{
                width: 60%;
                background-image: url("https://biblereadingzone.skyraan.net/assets/olybible/mail_temp/contact_temp.png");
                background-repeat: round;
                background-size: 100% 100%;
                border-radius: 0px;
                margin-top: 5rem;
                margin-bottom: 5rem;
                padding-top: 5rem;
                padding-bottom: 5rem;
            }
        </style>
    </head>
    <body>
        <div class=""></div>
        <div class="" style="display:flex; justify-content:center;">
            <div class="setbg">
                <div style="text-align: center;">
                    <img src="https://biblereadingzone.skyraan.net/assets/olybible/logo/olybible.png" alt="bible logo" style="width: 25%;padding-bottom: 1rem;"/>
                </div>
                <div style="text-align: center;font-size: 2rem;padding-bottom: 1rem; font-weight: 700; color:#2B5394;">Cliend Enquiry</div>                    
                <div style="margin-left: 3rem;margin-right: 3rem;">
                    <div style="display: flex; font-size: 18px;">
                        <p style="width:150px;"><strong>Client ID</strong></p>
                        <p><strong style="margin-right: 0.5rem;">:</strong> SKY{{$contact->id}}</p>
                    </div>
                    <div style="display: flex; font-size: 18px;">
                        <p style="width:150px;"><strong>Name</strong></p>
                        <p><strong style="margin-right: 0.5rem;">:</strong> {{$contact->name}}</p>
                    </div>
                    @if($contact->mobile != null)
                        <div style="display: flex; font-size: 18px;">
                            <p style="width:150px;"><strong>Mobile</strong></p>
                            <p><strong style="margin-right: 0.5rem;">:</strong> {{$contact->mobile}}</p>
                        </div>
                    @endif
                    <div style="display: flex; font-size: 18px;">
                        <p style="width:150px;"><strong>Email</strong></p>
                        <p><strong style="margin-right: 0.5rem;">:</strong> {{$contact->email}}</p>
                    </div>
                    @if($contact->message != null)
                        <div style="display: flex; font-size: 18px;">
                            <p style="width:150px;"><strong>Description</strong></p>
                            <p><strong style="margin-right: 0.5rem;">:</strong> {{$contact->message}}</p>
                        </div>
                    @endif
                </div>
                @php 
                    $currentDateTime = \Carbon\Carbon::now();
                    $formattedDateTime = $currentDateTime->format('d-M-Y');
                    $currentDateTime->modify('+5 hours +30 minutes');
                    $formattedTime = $currentDateTime->format('H:i');
                @endphp
                <div style="display: flex; justify-content: center; align-items: center;">
                    <p style="margin-left: 3rem;margin-right: 3rem;"><strong>Data: </strong> {{$formattedDateTime}}</p> 
                    <p style="margin-left: 3rem;margin-right: 3rem;"><strong>Time: </strong> {{$formattedTime}}</p> 
                </div>
            </div>
        </div>
    </body>
</html>