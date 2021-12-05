@extends('layouts/sidebar')
@section('contain')
<div class="h-screen px-2 py-20 bg-gray-300">
    <div class="max-w-md mx-auto overflow-hidden bg-white rounded-lg md:max-w-lg">
        <div class="md:flex">
            <div class="w-full">
                <div class="p-4 border-b-2"> <span class="text-lg font-bold text-gray-600">Add documents</span> </div>
                <div class="p-3">
                    <div class="mb-2"> <span class="text-sm">Judul</span> <input type="text"
                            class="w-full h-12 px-3 border border-gray-200 rounded focus:outline-none focus:border-gray-300">
                    </div>
                    <div class="mb-2"> <span>Upload Dokumen</span>
                        <div
                            class="relative flex items-center justify-center h-40 bg-white border-2 border-gray-200 border-dashed rounded-lg hover:cursor-pointer">
                            <div class="absolute">
                                <div class="flex flex-col items-center "> <i
                                        class="text-gray-200 fa fa-cloud-upload fa-3x"></i> <span
                                        class="block font-normal text-gray-400">Attach you files here</span> <span
                                        class="block font-normal text-gray-400">or</span> <span
                                        class="block font-normal text-blue-400">Browse files</span> </div>
                            </div> <input type="file" class="w-full h-full opacity-0" name="">
                        </div>
                        <div class="flex items-center justify-between text-gray-400"> <span>Accepted file type:.doc
                                only</span>
                    </div>
                    <div class="pb-3 mt-3 text-center"> <button
                            class="w-32 w-full h-12 text-lg text-white bg-blue-600 rounded hover:bg-blue-700">Tambah</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
