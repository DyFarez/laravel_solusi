<x-app-layout>
    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Member') }}
        </h2> -->
        <div class="page-header">
  <div class="row align-items-center">
    <div class="col">
      <div class="page-pretitle">
        Tambah Data Member
      </div>
      <h2 class="page-title">
      {{ __('Tambah Member') }}
      </h2>
    </div>
    <div class="col-auto">
      <a href="{{ route('member')}}" class="btn btn-primary d-none d-sm-inline-block">
        Kembali
      </a>
    </div>
  </div>
</div>

    </x-slot>
<div class="container card">
  <form method="post" action="{{ route('store') }}" class="forms">
    @csrf
    <div class="mb-3">
      <label class="form-label required">Nama</label>
      <input type="text" name="name" class="form-control" autocomplete="off"/>
      <label class="form-label required">Cabang</label>
      <input type="text" name="branch_id" class="form-control" autocomplete="off"/>
      <label class="form-label required">No. Telephone</label>
      <input type="text" name="phone_number" class="form-control" autocomplete="off"/>
      <label class="form-label required">Photo</label>
      <input type="text" name="file" class="form-control" autocomplete="off"/>
      <!-- <label class="form-label required">Photo</label> -->
      <!-- <input type="file" name="file"> -->
      <button class="btn btn-success d-none d-sm-inline-block" type="submit">Kirim</buttton>
    </div>
  </form>
</div>


    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Ini Member") }}
                </div>
            </div>
        </div>
    </div> -->
</x-app-layout>


