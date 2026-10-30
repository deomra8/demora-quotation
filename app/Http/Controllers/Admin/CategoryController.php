<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function __construct(
        protected CategoryService $categoryService
    ) {}

    /**
     * Display all categories.
     */
    public function index(): View
    {
        $categories = $this->categoryService->getAll();

        return view('admin.pages.categories.index', compact('categories'));
    }

    public function create(): View
    {
        return view('admin.pages.categories.create');
    }

    /**
     * Display a specific category.
     */
    public function show(int $id): View
    {
        $category = $this->categoryService->find($id);

        return view('admin.pages.categories.show', compact('category'));
    }

    /**
     * Store a new category.
     */
    public function store(StoreCategoryRequest $request): RedirectResponse
    {
        $this->categoryService->create($request->validated());

        return redirect()
            ->route('categories.index')
            ->with('success', 'Category created successfully.');
    }

    public function edit(Category $category): View
    {
        return view('admin.pages.categories.edit', compact('category'));
    }

    /**
     * Update an existing category.
     */
    public function update(
        UpdateCategoryRequest $request,
        Category $category
    ): RedirectResponse {

        $this->categoryService->update(
            $category,
            $request->validated()
        );

        return redirect()
            ->route('categories.index')
            ->with('success', 'Category updated successfully.');
    }

    /**
     * Delete a category.
     */
    public function destroy(Category $category): RedirectResponse
    {
        $this->categoryService->delete($category);

        return redirect()
            ->route('categories.index')
            ->with('success', 'Category deleted successfully.');
    }
}
