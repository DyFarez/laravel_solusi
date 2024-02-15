<x-app-layout>
    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Member') }}
        </h2> -->
        <div class="page-header">
  <div class="row align-items-center">
    <div class="col">
      <div class="page-pretitle">
        List Daftar Member
      </div>
      <h2 class="page-title">
      {{ __('Member') }}
      </h2>
    </div>
    <div class="col-auto ">
      <div class="btn-list">
      <!-- <button href="{{ route('login') }}"  class="btn btn-primary d-none d-sm-inline-block">Tambah</button> -->
        <a href="{{ route('tambah-member')}}" class="btn btn-primary d-none d-sm-inline-block">
          Tambah
        </a>
        <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <line x1="12" y1="5" x2="12" y2="19" />
            <line x1="5" y1="12" x2="19" y2="12" />
          </svg>
        </a>
      </div>
    </div>
  </div>
</div>

    </x-slot>

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Ini Member") }}
                </div>
            </div>
        </div>
    </div> -->
    
<!-- Table -->
<div class="table-responsive">
  <table class="table table-vcenter">
    <thead>
      <tr>
        <th>No</th>
        <th>Aksi</th>
        <th>Nama</th>
        <th>Cabang</th>
        <th>Photo</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($members as $member)
        <tr>
            <td>{{ $member->id }}</td>
            <td class="text-secondary">
              <a href="#" class="btn btn-ghost-warning btn-sm">Ubah</a>
                    <form action="{{ route('delete-member', $member->id) }}" method="post">
                      {{ csrf_field() }}
                      <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
              <!-- <a href="/member/delete/{{ $member['id']}}" class="btn btn-ghost-danger btn-sm">Hapus</a> -->
            </td>
            <td class="text-secondary">{{ $member->name }}</td>
            <td class="text-secondary">
              {{ $member->branches->name }}
            </td>
            <td>
              <a href="#"><img></img></a>
            </td>
        </tr>
      @endforeach
      <!-- <tr>
        <td>1</td>
        <td class="text-secondary">
          <a href="#" class="btn btn-ghost-warning btn-sm">Ubah</a>
          <a href="#" class="btn btn-ghost-danger btn-sm">Hapus</a>
        </td>
        <td class="text-secondary">Jeffie Lewzey</td>
        <td class="text-secondary">
          Pekanbaru
        </td>
        <td>
          <a href="#"><img></img></a>
        </td>
      </tr>
      <tr>
      <td>2</td>
        <td class="text-secondary">
          <a href="#" class="btn btn-ghost-warning btn-sm">Ubah</a>
          <a href="#" class="btn btn-ghost-danger btn-sm">Hapus</a>
        </td>
        <td class="text-secondary">Dunn Slane</td>
        <td class="text-secondary">
          Pekanbaru
        </td>
        <td>
          <a href="#"><img></img></a>
        </td>
      </tr> -->
    </tbody>
  </table>
</div>
<!-- Table -->
</x-app-layout>


