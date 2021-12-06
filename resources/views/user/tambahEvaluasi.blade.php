@extends('layouts/sidebar')

@section('title')
User
@endsection

@section('contain')

<form action="{{ route('user.store') }}" method="get" enctype="multipart/form-data">
    @csrf
    <div class="h-screen px-2 py-20 bg-gray-300">
        <div class="max-w-md mx-auto overflow-hidden bg-white rounded-lg md:max-w-lg">
            <div class="md:flex">
                <div class="w-full px-4 py-6 ">
                    <div class="mb-1"> <span class="text-sm">Judul</span> <input type="text"
                            class="w-full h-12 px-3 border-2 border-blue-400 rounded focus:outline-none focus:border-blue-600" name="judul">
                    </div>
                    <div class="mb-1"> <span class="text-sm text-gray-400">You will be able to edit this information
                            later</span> </div>
                    <div>
                        <label for="formFileLg" class="form-label">Upload Dokumen</label>
                        <input class="form-control form-control-lg" id="formFileLg" type="file" id="dokumen" name="dokumen">
                    </div>
                    <div class="mt-3 text-right"> <a href="#">Cancel</a> <button
                            class="w-32 h-10 ml-2 text-white bg-blue-600 rounded hover:bg-blue-700">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

{{-- <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="p-3">


        <div class="mb-2"> <span class="text-sm">Judul</span> <input type="text"
                class="w-full h-12 px-3 border border-gray-200 rounded focus:outline-none focus:border-gray-300"
                name="judul">
        </div>
        <div class="mb-2"> <span>Attachments</span>
            <div
                class="relative flex items-center justify-center h-40 bg-white border-2 border-gray-200 border-dashed rounded-lg hover:cursor-pointer">
                <div class="absolute">
                    <div class="flex flex-col items-center "> <i class="text-gray-200 fa fa-cloud-upload fa-3x"></i>
                        <span class="block font-normal text-gray-400">Attach you files here</span>
                        <span class="block font-normal text-gray-400">or</span> <span
                            class="block font-normal text-blue-400">Browse files</span>
                    </div>
                </div>
                <input type="file" class="w-full h-full opacity-0" name="file">
            </div>
            <input type="file" class="h-10" name="file">
            <div class="flex items-center justify-between text-gray-400"> <span>Accepted file
                    type:.pdf
                    only</span> <span class="flex items-center "><i class="mr-1 fa fa-lock"></i>
                    secure</span> </div>
        </div>
        <div class="pb-3 mt-3 text-center"> <button
                class="w-32 w-full h-12 text-lg text-white bg-blue-600 rounded hover:bg-blue-700">Create</button>
        </div>
    </div>
</form> --}}

@endsection
