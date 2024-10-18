@include('components.navbar')

@section('title', 'Halaman Kontak')

@section('content')
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <body class="bg-gray-100">

      <div class="max-w-6xl mx-auto mt-10 p-5 bg-gray-50 rounded-lg shadow-md">
          <h2 class="text-2xl font-bold text-center mb-6">Data Kontak</h2>

          <table class="min-w-full border-collapse border border-gray-200">
              <thead>
                  <tr class="bg-blue-100">
                      <th class="border border-gray-300 px-6 py-4 text-left text-lg">Nama</th>
                      <th class="border border-gray-300 px-6 py-4 text-left text-lg">Email</th>
                      <th class="border border-gray-300 px-6 py-4 text-left text-lg">No Handphone</th>
                      <th class="border border-gray-300 px-6 py-4 text-left text-lg">Alamat</th>
                  </tr>
              </thead>
              <tbody>
              @foreach ($users as $item)
                <tr>
                    <td>{{ $item['name']}}</td>
                    <td>{{ $item['email'] }}</td>
                    <td>{{ $item['phone'] }}</td>
                    <td>{{ $item['address'] }}</td>
                </tr>
            @endforeach
              </tbody>
          </table>
      </div>

  </body>

