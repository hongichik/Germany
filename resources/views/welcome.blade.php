@extends('templates.default')
@section('meta_content')
    <meta name="description" content="{{ setting('site.description') }}" />
    <meta name="keywords" content="{{ setting('site.keyword') }}" />

    <meta property="og:title" content="{{ setting('site.title') }}" />
    <meta property="og:description" content="{{ setting('site.description') }} " />
    <meta property="og:url" content="{{ env('APP_URL') . $_SERVER['REQUEST_URI'] }}" />
    <meta property="og:home_name" content="{{ setting('site.title') }}" />
    <meta name="twitter:title" content="{{ setting('site.title') }}" />
    <meta name="twitter:description" content="{{ setting('site.description') }} " />
    <meta name="title" content="{{ setting('site.title') }}" />
    <meta name="thumbnail" content="{{ asset('storage') . '/' . str_replace('\\', '/', setting('home.logo_Menu')) }}" />


    <title>{{ setting('site.title') }}</title>
@endsection
@section('h_extension')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{ asset('asset/js/home.js') }}"></script>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dcdcdc;
            text-align: left;
            padding: 8px;
            color: black
        }

        tr:nth-child(even) {
            background-color: #ebebeb;
        }

        tr:nth-child(odd) {
            background-color: #fff;
        }
    </style>
@endsection
@section('content')
    <main>
        <div class="content">
            <div class="w-full border-box pt-8 pl-8 pr-8 pb-2"
                style="background: center center / cover no-repeat transparent">
                <div class="mx-auto max-w-md sm:max-w-xl w-full md:max-w-3xl lg:max-w-4xl">
                    <div style="">
                        <div class="wrapper break-words text-center svelte-tb17ze responsive"
                            style="--textColor: #ffffff; --linkColor: #ffffff">
                            <h2>
                                <strong>Echter Schweizer Kredit mit nur 1 Klick!</strong>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full border-box pt-2 pl-8 pr-8 pb-6"
                style="background: center center / cover no-repeat transparent">
                <div class="mx-auto max-w-md sm:max-w-xl w-full md:max-w-3xl lg:max-w-4xl">
                    <div style="">
                        <div class="wrapper break-words text-center svelte-tb17ze responsive"
                            style="--textColor: #ffffff; --linkColor: #ffffff">
                            <p>Mit diesem Schweizer Kredit haben Verbraucher die besten Erfolgs-Chancen! </p>
                            <p><a href="">(mehr zu unseren Studienzahlen..)</a></p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full border-box pt-8 pl-6 pr-6 pb-8"
                style="background: center center / cover no-repeat transparent">
                <div class="mx-auto max-w-md sm:max-w-xl w-full">
                    <div style="">
                        <?php
                        $url_pdf = json_decode(setting('site.file_pdf_home', 'download_link'));
                        $url_pdf = 'storage/' . $url_pdf[0]->download_link;
                        ?>
                        <a target="_blank"
                            class="py-4 px-6 rounded-md mx-auto max-w-md block cursor-pointer border-none w-full box-border button transition jittery text-center transform active:scale-90 svelte-k9qwtc"
                            href="{{ Route('show_pdf') }}"
                            style="
                  --buttonColor: #f5f5f5;
                  --buttonBgColor: #1ba232;
                  --buttonBgColorDark: hsla(130, 71%, 27%, 1);
                ">
                            <div class="w-full border-box"
                                style="
                    background: center center / cover no-repeat transparent;
                  ">
                                <div class="mx-auto max-w-md sm:max-w-xl w-full md:max-w-3xl lg:max-w-4xl">
                                    <div style="">
                                        <div class="wrapper break-words text-center svelte-tb17ze"
                                            style="--textColor: #f5f5f5; --linkColor: #0076ff">
                                            <h4>Kreditgesuch Antrag (PDF)</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full h-full bg-no-repeat" style="background: transparent">
                <div class="mx-auto max-w-md sm:max-w-xl w-full md:max-w-3xl">
                    <div style="">
                        <div class="p-6 sm:px-12 sm:py-6 md:px-20 md:py-10">
                            <div class="imageWrapper overflow-hidden leading-[0] rounded">
                                <div class="wrapper svelte-pj5vj2" style="width: 100%">
                                    <div class="svelte-k8l55j loaded" style="position: relative; width: 100%">
                                        <div style="position: relative; overflow: hidden">
                                            <div style="width: 100%; padding-bottom: 75%"></div>
                                            <picture>
                                                <img src="
                                                    @if (setting('site.img_pdf_home') == null) {{ asset('asset/image/home/demo_pdf.png') }}
                                                    @else
                                                        {{ asset('storage') . '/' . str_replace('\\', '/', setting('site.img_pdf_home')) }} @endif  "
                                                    alt="" class="main svelte-k8l55j cached"
                                                    style="--duration: 200ms" />
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full border-box pt-8 pl-8 pr-8 pb-8"
                style="background: center center / cover no-repeat transparent">
                <div class="mx-auto max-w-md sm:max-w-xl w-full md:max-w-3xl lg:max-w-4xl">
                    <div style="">
                        <div class="wrapper break-words text-center svelte-tb17ze responsive"
                            style="--textColor: #ffffff; --linkColor: #ffffff">
                            <h4><br /></h4>
                            <h4><br /></h4>
                            <h4>
                                +++2.405 genehmigte Anträge (Stand 01/23), täglich werden es mehr+++
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full border-box pt-6 pl-6 pr-6 pb-6"
                style="background: center center / cover no-repeat transparent">
                <div class="mx-auto max-w-md sm:max-w-xl w-full md:max-w-3xl lg:max-w-4xl">
                    <div style="">
                        <div class="grid text-left gap-6 grid-cols-1 md:grid-cols-2">
                            <div class="flex box-border w-full align-top items-start">
                                <div class="flex-shrink-0 flex items-center justify-center svelte-10vu51z"
                                    style="width: 48px; height: 48px">
                                    <em-emoji id="white_check_mark" size="32px"><span class="emoji-mart-emoji"
                                            data-emoji-set="native"><span
                                                style="
                            font-size: 32px;
                            font-family: EmojiMart, 'Segoe UI Emoji',
                              'Segoe UI Symbol', 'Segoe UI', 'Apple Color Emoji',
                              'Twemoji Mozilla', 'Noto Color Emoji',
                              'Android Emoji';
                          ">✅</span></span>
                                    </em-emoji>
                                </div>
                                <div class="text flex items-center flex-grow break-words ml-6 min-w-0 svelte-10vu51z"
                                    style="min-height: 48px; font-size: 16px">
                                    <div class="w-full border-box"
                                        style="
                        background: center center / cover no-repeat transparent;
                      ">
                                        <div class="mx-auto max-w-md sm:max-w-xl w-full md:max-w-3xl lg:max-w-4xl">
                                            <div style="">
                                                <div class="wrapper break-words text-left svelte-tb17ze inheritSize responsive"
                                                    style="--textColor: #ffffff; --linkColor: #0076ff">
                                                    <h4>

                                                        <strong>Nur als PDF beantragbar</strong> (Vorsicht
                                                        vor unseriösen Vergleichsportalen, die
                                                        Kreditangebote nur nach ihrer Provision
                                                        aussteuern! (mehr Infos)
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex box-border w-full align-top items-start">
                                <div class="flex-shrink-0 flex items-center justify-center svelte-10vu51z"
                                    style="width: 48px; height: 48px">
                                    <em-emoji id="white_check_mark" size="32px"><span class="emoji-mart-emoji"
                                            data-emoji-set="native"><span
                                                style="
                            font-size: 32px;
                            font-family: EmojiMart, 'Segoe UI Emoji',
                              'Segoe UI Symbol', 'Segoe UI', 'Apple Color Emoji',
                              'Twemoji Mozilla', 'Noto Color Emoji',
                              'Android Emoji';
                          ">✅</span></span>
                                    </em-emoji>
                                </div>
                                <div class="text flex items-center flex-grow break-words ml-6 min-w-0 svelte-10vu51z"
                                    style="min-height: 48px; font-size: 16px">
                                    <div class="w-full border-box"
                                        style="
                        background: center center / cover no-repeat transparent;
                      ">
                                        <div class="mx-auto max-w-md sm:max-w-xl w-full md:max-w-3xl lg:max-w-4xl">
                                            <div style="">
                                                <div class="wrapper break-words text-left svelte-tb17ze inheritSize responsive"
                                                    style="--textColor: #ffffff; --linkColor: #0076ff">
                                                    <h4>
                                                        <strong>Direkte Beantragung verspricht attraktive
                                                            Zinsen²</strong>
                                                    </h4>
                                                    <h4>und eine schnelle Bearbeitung der Anfrage</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex box-border w-full align-top items-start">
                                <div class="flex-shrink-0 flex items-center justify-center svelte-10vu51z"
                                    style="width: 48px; height: 48px">
                                    <em-emoji id="white_check_mark" size="32px"><span class="emoji-mart-emoji"
                                            data-emoji-set="native"><span
                                                style="
                            font-size: 32px;
                            font-family: EmojiMart, 'Segoe UI Emoji',
                              'Segoe UI Symbol', 'Segoe UI', 'Apple Color Emoji',
                              'Twemoji Mozilla', 'Noto Color Emoji',
                              'Android Emoji';
                          ">✅</span></span>
                                    </em-emoji>
                                </div>
                                <div class="text flex items-center flex-grow break-words ml-6 min-w-0 svelte-10vu51z"
                                    style="min-height: 48px; font-size: 16px">
                                    <div class="w-full border-box"
                                        style="
                        background: center center / cover no-repeat transparent;
                      ">
                                        <div class="mx-auto max-w-md sm:max-w-xl w-full md:max-w-3xl lg:max-w-4xl">
                                            <div style="">
                                                <div class="wrapper break-words text-left svelte-tb17ze inheritSize responsive"
                                                    style="--textColor: #ffffff; --linkColor: #0076ff">
                                                    <h4>
                                                        <strong>Ca. 14 Tage.</strong> Vom Antrag bis zur
                                                        Auszahlung
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex box-border w-full align-top items-start">
                                <div class="flex-shrink-0 flex items-center justify-center svelte-10vu51z"
                                    style="width: 48px; height: 48px">
                                    <em-emoji id="white_check_mark" size="32px"><span class="emoji-mart-emoji"
                                            data-emoji-set="native"><span
                                                style="
                            font-size: 32px;
                            font-family: EmojiMart, 'Segoe UI Emoji',
                              'Segoe UI Symbol', 'Segoe UI', 'Apple Color Emoji',
                              'Twemoji Mozilla', 'Noto Color Emoji',
                              'Android Emoji';
                          ">✅</span></span>
                                    </em-emoji>
                                </div>
                                <div class="text flex items-center flex-grow break-words ml-6 min-w-0 svelte-10vu51z"
                                    style="min-height: 48px; font-size: 16px">
                                    <div class="w-full border-box"
                                        style="
                        background: center center / cover no-repeat transparent;
                      ">
                                        <div class="mx-auto max-w-md sm:max-w-xl w-full md:max-w-3xl lg:max-w-4xl">
                                            <div style="">
                                                <div class="wrapper break-words text-left svelte-tb17ze inheritSize responsive"
                                                    style="--textColor: #ffffff; --linkColor: #0076ff">
                                                    <h4>
                                                        <strong>Trotz negativer Schufa</strong>
                                                        Finanzierungszusage auch schon tausendfach erteilt
                                                        trotz Negativem Schufaeintrag!
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full border-box pt-8 pl-6 pr-6 pb-8"
                style="background: center center / cover no-repeat transparent">
                <div class="mx-auto max-w-md sm:max-w-xl w-full">
                    <div style="">
                        <a href="{{ setting('site.link_online_Antrag') }}"
                            class="py-4 px-6 rounded-md mx-auto max-w-md block cursor-pointer border-none w-full box-border button transition text-center transform active:scale-90 svelte-k9qwtc"
                            type="button"
                            style="
                  --buttonColor: #f5f5f5;
                  --buttonBgColor: #4cd964;
                  --buttonBgColorDark: hsla(130, 65%, 47%, 1);
                ">
                            <div class="w-full border-box"
                                style="
                    background: center center / cover no-repeat transparent;
                  ">
                                <div class="mx-auto max-w-md sm:max-w-xl w-full md:max-w-3xl lg:max-w-4xl">
                                    <div style="">
                                        <div class="wrapper break-words text-center svelte-tb17ze"
                                            style="--textColor: #f5f5f5; --linkColor: #0076ff">
                                            <h4>
                                                <strong>+++neu: Online Antrag+++ (ANCHOR)</strong>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full border-box pt-8 pl-8 pr-8 pb-4"
                style="background: center center / cover no-repeat transparent">
                <div class="mx-auto max-w-md sm:max-w-xl w-full md:max-w-3xl lg:max-w-4xl">
                    <div style="">
                        <div class="wrapper break-words text-center svelte-tb17ze responsive"
                            style="--textColor: #ffffff; --linkColor: #ffffff">
                            <h2>
                                <strong>Unsere Experte Moritz betreut Verbraucher </strong>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full border-box pt-4 pl-8 pr-8 pb-8"
                style="background: center center / cover no-repeat transparent">
                <div class="mx-auto max-w-md sm:max-w-xl w-full md:max-w-3xl lg:max-w-4xl">
                    <div style="">
                        <div class="wrapper break-words text-center svelte-tb17ze responsive"
                            style="--textColor: #ffffff; --linkColor: #ffffff">
                            <h4>
                                Dipl.- Oec. Moritz Schmidt ist seit Jahren in der
                                Verbraucherschutzberatung aktiv und hilft ehrenamtlich
                                vorallem in schwierigen Fällen bei der Kreditfindung. Mit der
                                deutschen Kreditberatung stellen wir nun dieses notwendige
                                Insider-Wissen fernab von gängigen Vergleichsportalen zur
                                Verfügung. Um auch Sie seriös und ehrlich zu beraten.
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full h-full bg-no-repeat" style="background: transparent">
                <div class="mx-auto max-w-md sm:max-w-xl w-full md:max-w-3xl">
                    <div style="">
                        <div class="p-6 sm:px-12 sm:py-6 md:px-20 md:py-10">
                            <div class="imageWrapper overflow-hidden leading-[0] rounded">
                                <div class="wrapper svelte-pj5vj2" style="width: 100%">
                                    <div class="svelte-k8l55j loaded" style="position: relative; width: 100%">
                                        <div style="position: relative; overflow: hidden">
                                            <div style="width: 100%; padding-bottom: 83.3333%"></div>
                                            <picture>
                                                    <img src="{{ asset('storage') . '/' . str_replace('\\', '/', setting('site.Photo_of_the_expert')) }} "
                                                    alt="" class="main svelte-k8l55j cached"
                                                    style="--duration: 200ms" />
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full border-box pt-8 pl-8 pr-8 pb-8"
                style="background: center center / cover no-repeat transparent">
                <div class="mx-auto max-w-md sm:max-w-xl w-full md:max-w-3xl lg:max-w-4xl">
                    <div style="">
                        <div class="wrapper break-words text-left svelte-tb17ze responsive"
                            style="--textColor: #ffffff; --linkColor: #ffffff">
                            <h3>
                                <strong>Das sagen echte Personen, denen wir zum positiven Antrag
                                    helfen konnten.</strong>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full border-box pt-8 pl-8 pr-8 pb-8"
                style="background: center center / cover no-repeat transparent">
                <div class="mx-auto max-w-md sm:max-w-xl w-full md:max-w-3xl lg:max-w-4xl">
                    <div style="">
                        <div class="wrapper break-words text-left svelte-tb17ze responsive"
                            style="--textColor: #ffffff; --linkColor: #ffffff">
                            <h4>
                                Ein sog. Schweizer Kredit ist ein Kredit welcher
                                Schufa-neutral ist, d. h. es erfolgt keine Kommunikation mit
                                der Schufa.
                            </h4>
                            <h4><br /></h4>
                            <h4>
                                Auch unser Partner Bon-Kredit verhilft Ihnen zu Ihrem
                                gewünschten Darlehen. Auch wenn andere schon abgesagt haben.
                                Mehr als 45 Jahre Erfahrung und zahlreiche Kontakte zu Banken
                                im In- und Ausland machen das möglich. Kredite ab 2,79%¹ –
                                garantiert ohne Vorkosten. Zusätzlich vermittelt Bon-Kredit
                                auch Darlehen der SIGMA Kreditbank. Sie können Ihren Kredit
                                also auch direkt online beantragen!
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full border-box pt-4 pl-4 pr-4 pb-4" style="background: center center / cover no-repeat">
                <div class="mx-auto max-w-md sm:max-w-xl w-full md:max-w-3xl lg:max-w-5xl">
                    <div style="">
                        <div class="grid grid-cols-1 gap-4 items-start lg:grid-cols-2 ">
                            @foreach ($questions as $question)
                                <div class="">
                                    <div class="w-full border-box rounded-md pt-4 pl-4 pr-4"
                                        style=" background: center center / cover no-repeat rgb(245, 245, 245); ">
                                        <div class="relative rounded-md md:p-2 ">
                                            <div class="cursor-pointer pr-10 dropdowns">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-6 h-6 absolute top-0 md:top-2 right-0 md:right-2 transition duration-[400ms] ease-[cubic-bezier(0.16,1,0.3,1)] transform rotate-0"
                                                    viewBox="0 0 20 20" fill="#000000">
                                                    <path fillrule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        cliprule="evenodd"></path>
                                                </svg>
                                                <div class="w-full border-box"
                                                    style=" background: center center / cover no-repeat transparent;">
                                                    <div
                                                        class="mx-auto max-w-md sm:max-w-xl w-full md:max-w-3xl lg:max-w-5xl">
                                                        <div style="">
                                                            <div class="wrapper break-words text-left svelte-tb17ze"
                                                                style=" --textColor: #000000;--linkColor: #0076ff; ">
                                                                <h3>
                                                                    <strong>{{ $question->question }}</strong>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-2"></div>
                                            <div class="dropdowns_content overflow-hidden duration-[400ms] ease-[cubic-bezier(0.16,1,0.3,1)] transform transition-all  -translate-y-2"
                                                style="display: none">
                                                <div class="w-full border-box"
                                                    style="background: center center / cover no-repeattransparent;">
                                                    <div
                                                        class="mx-auto max-w-md sm:max-w-xl w-full md:max-w-3xl lg:max-w-5xl">
                                                        <div style="">
                                                            <div class="wrapper break-words text-left svelte-tb17ze"
                                                                style="--textColor: #5c5c5c; --linkColor: #0076ff; ">
                                                                <h4>
                                                                    {!! $question->answer !!}
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="py-2"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full border-box pt-8 pl-8 pr-8 pb-8"
                style="background: center center / cover no-repeat transparent">
                <div class="mx-auto max-w-md sm:max-w-xl w-full md:max-w-3xl lg:max-w-4xl">
                    <div style="">
                        <div class="wrapper break-words text-left svelte-tb17ze responsive"
                            style="--textColor: #ffffff; --linkColor: #ffffff">
                            {{-- <h3>Here please insert a HTML Table.</h3> --}}
                            <table>

                                @foreach ($tables as $index => $table)
                                    @if ($index == 0)
                                        <tr>
                                            <th>{{ $table->column_one }}</th>
                                            <th>{{ $table->column_two }}</th>
                                            <th>{{ $table->column_three }}</th>
                                            <th>{{ $table->column_four }}</th>
                                        </tr>
                                    @else
                                        <tr>
                                            <td>{{ $table->column_one }}</td>
                                            <td>{{ $table->column_two }}</td>
                                            <td>{{ $table->column_three }}</td>
                                            <td>{{ $table->column_four }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </table>

                            </body>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full border-box pt-8 pl-8 pr-8 pb-8"
                style="background: center center / cover no-repeat transparent">
                <div class="mx-auto max-w-md sm:max-w-xl w-full md:max-w-3xl lg:max-w-4xl">
                    <div style="">
                        <div class="wrapper break-words text-center svelte-tb17ze responsive"
                            style="--textColor: #ffffff; --linkColor: #ffffff">
                            <h4>
                                <strong><ins>Hinweis: Wir sind kein Kreditvermittler</ins></strong>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full border-box pt-8 pl-8 pr-8 pb-8"
                style="background: center center / cover no-repeat transparent">
                <div class="mx-auto max-w-md sm:max-w-xl w-full md:max-w-3xl lg:max-w-4xl">
                    <div style="">
                        <div class="wrapper break-words text-left svelte-tb17ze responsive"
                            style="--textColor: #ffffff; --linkColor: #ffffff">
                            <h4>
                                ² SIGMA Kreditbank Konditionen: Sollzinssatz jährlich 10,19 %
                                bei EUR 3.500,00 sowie 10,21% bei EUR 5.000,00 und 10,20% EUR
                                7.500,00. Effektiver Jahreszins 10,68 % bei EUR 3.500,00 sowie
                                10,70% bei EUR 5.000,00 und 10,69% EUR 7.500,00.
                            </h4>
                            <h4><br /></h4>
                            <h4><br /></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full border-box pt-8 pl-8 pr-8 pb-8"
                style="background: center center / cover no-repeat transparent">
                <div class="mx-auto max-w-md sm:max-w-xl w-full md:max-w-3xl lg:max-w-4xl">
                    <div style="">
                        <div class="wrapper break-words text-left svelte-tb17ze responsive"
                            style="--textColor: #ffffff; --linkColor: #ffffff">
                            <h3>
                                Block where the this calculator should be inserted:
                                https://www.maxda.de/sigma-schufafrei/?a_aid=8882&amp;a_bid=4bdf88bd
                            </h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3>Ende</h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                            <h3><br /></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper svelte-1ackld8" style="background-color: rgba(255, 255, 255, 0.2)">
            <div class="progress svelte-1ackld8" style="background-color: rgb(255, 255, 255); width: 14.2857%"></div>
        </div>
    </main>
@endsection

@section('f_extension')
@endsection
