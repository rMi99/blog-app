<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    

    <div class="container mx-auto py-12">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
        <h2 class="text-xl text-gray-800 dark:text-gray-200 font-semibold leading-tight mb-4">
            {{ __('Dashboard') }}
        </h2>
        
        <!-- Card content -->
        <div class="bg-white dark:bg-gray-200 p-4 rounded-lg shadow-md">
            <!-- Card image -->
            <img src="your-image-url.jpg" alt="Card Image" class="w-full h-32 object-cover rounded-lg mb-4">
            
            <!-- Card title -->
            <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-2">Card Title</h3>
            
            <!-- Card buttons (delete and edit) -->
            <div class="flex space-x-4">
                <button class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-full">Delete</button>
                <button class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-full" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Card</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Edit form inputs (title, photo, article) go here -->
                <form>
                    <div class="mb-3">
                        <label for="editTitle" class="form-label">Title</label>
                        <input type="text" class="form-control" id="editTitle">
                    </div>
                    <div class="mb-3">
                        <label for="editPhoto" class="form-label">Photo</label>
                        <input type="file" class="form-control" id="editPhoto">
                    </div>
                    <div class="mb-3">
                        <label for="editArticle" class="form-label">Article</label>
                        <textarea class="form-control" id="editArticle" rows="4"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>



</x-app-layout>
