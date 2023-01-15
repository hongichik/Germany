    <div
      class="w-full p-4 border-box sm:py-6"
      style="background-color: #fff"
      cursor-pointer:clickable=""
    >
      <div class="text-center">
        <img
          alt="Logo"
          class="inline-block clickable h-10"
          src="
          @if(setting('site.image_header') == null)
            {{ asset('asset/image/icon/icon_header.avif') }}
          @else
            {{  asset('storage').'/'.str_replace('\\', '/',setting('site.image_header')) }}
          @endif  
            "
          style="height: 40px"
        />
      </div>
    </div>