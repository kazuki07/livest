<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.tailwindcss.com/2.2.16/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/runningtext.css') }}">
    <title>Document</title>
  </head>
  <body class="overflow-hidden">
    <nav class="border-gray-200 bg-white dark:bg-gray-900">
      <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-4">
        <a href="#" class="flex items-center">
          <span class="self-center whitespace-nowrap text-2xl font-semibold dark:text-white">Logo&Nama</span>
        </a>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
          <ul class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 font-medium dark:border-gray-700 dark:bg-gray-800 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:p-0 md:dark:bg-gray-900">
            <li>
              <a href="#" class="block rounded bg-blue-700 py-2 pl-3 pr-4 text-white dark:text-white md:bg-transparent md:p-0 md:text-blue-700 md:dark:text-blue-500" aria-current="page">Cuaca</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="m-24 flex h-full flex-col overflow-hidden rounded-lg bg-white pt-1">
      <div class="max-h-screen flex-grow">
        <div class="grid h-96 grid-cols-3">
          <div class="bg-blue-300">
            <div class="grid grid-rows-2">
              <div class="flex h-72 items-center justify-center bg-orange-500">
                <h1 class="text-center font-semibold text-white">Berita</h1>
              </div>
              <div class="flex h-24 items-center justify-center bg-orange-700">
                <h1 class="text-center font-semibold text-white">
                  <div class="clock flex items-center space-x-2 font-semibold">
                    <div class="flex h-16 w-16 items-center justify-center rounded-lg bg-white text-xl text-purple-800 shadow-md">
                      <span id="hour">00</span>
                    </div>
                    <span>:</span>
                    <div class="flex h-16 w-16 items-center justify-center rounded-lg bg-white text-xl text-purple-800 shadow-md">
                      <span id="minute">00</span>
                    </div>
                    <span>:</span>
                    <div class="flex h-16 w-16 items-center justify-center rounded-lg bg-white text-xl text-purple-800 shadow-md">
                      <span id="seconds">00</span>
                    </div>
                  </div>
                </h1>
              </div>
            </div>
          </div>
          <div class="bg-red-300 p-0.5">
            <div class="grid grid-rows-2">
              <div class="flex h-80 items-center justify-center bg-purple-600">
                <h1 class="text-center font-semibold text-white">Live streaming</h1>
              </div>
              <div class="flex h-16 items-center justify-center bg-orange-900">
                <h1 class="text-center font-semibold text-white">Informasi</h1>
              </div>
            </div>
          </div>
          <div class="bg-purple-300 p-0.5">
            <div class="grid grid-rows-2">
              <div class="flex h-48 items-center justify-center bg-red-200">
                <h1 class="text-center font-semibold text-white">Pict</h1>
              </div>
              <div class="flex h-48 items-center justify-center bg-red-600">
                <h1 class="text-center font-semibold text-white">Slide</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-3 flex h-10 items-center justify-center bg-black">
      <div class="bg-light overflow-hidden px-2">
          <p class="animate-runningText whitespace-nowrap font-semibold text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>
