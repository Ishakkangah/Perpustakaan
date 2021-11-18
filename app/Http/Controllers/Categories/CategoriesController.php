<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\Request\CategoryRequest;
use App\Models\{buku, Category, member, transaksi};
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(Category $category)
    {   
        return view('buku.index', [
            'books' => $category->bukus()->latest()->paginate(5),
            'category' => $category,
            'all_books' => buku::get(),
            'all_members' => member::get(),
            'all_transactions' => transaksi::get(),
            'categories' => Category::get(),
        ]);
    }
    
    public function table(Category $category)
    {
        return view('buku.category.table', [
            'categories' => Category::latest()->Paginate(5),
        ]);
    }

    public function create()
    {
        return view('buku.category.create', [
            'category' => new Category(),
        ]);
    }
    
    public function store(CategoryRequest $request)
    {
        Category::create([
            'nama_category' => $request->nama_category,
            'slug' => Str::slug($request->nama_category),
            'deskripsi' => $request->deskripsi,
            'created_by' => Carbon::now('Asia/Jakarta'),
        ]);

        return redirect('category/table')->with('success', 'The category was inserted');
    }

    public function edit(Category $category)
    {
        return view('buku.category.edit', [
            'category' => $category,
        ]);
    }

    
    public function update(CategoryRequest $request, Category $category)
    {
        $category->update([
            'nama_category' => $request->nama_category,
            'slug' => Str::slug($request->nama_category),
            'deskripsi' => $request->deskripsi,
            'created_by' => Carbon::today(),
        ]);

        return redirect('category/table')->with('success', 'The category was updated');
    }

    public function delete(Category $category)
    {
        $category->delete();
        $category->bukus()->delete();
        return redirect('category/table')->with('success', 'The category was deleted');
    }


}
