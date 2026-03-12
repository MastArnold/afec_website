<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\CarouselResource;
use App\Repositories\Contracts\CarouselRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarouselController extends Controller
{
    public function __construct(private CarouselRepositoryInterface $blogs)
    {
    }

    public function index(Request $request): AnonymousResourceCollection
    {
        $perPage = $request->query('per_page', 15);
        return CarouselResource::collection($this->blogs->paginate($perPage));
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->all();
        $data['created_by'] = Auth::id();
        $data['updated_by'] = Auth::id();
        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $imageName = 'carousel_' . time() . '.' . $image->getClientOriginalExtension();
            
            // Store the image in the public/storage/data/gallery directory
            $path = $image->storeAs('data/carousels', $imageName, 'public');
            
            // Add the image URL to the data
            $data['image'] = asset('storage/' . $path);
        }
        $created = $this->blogs->create($data);
        return (new CarouselResource($created))
                ->response()
                ->setStatusCode(201);;
        
    }

    public function show(int $id): JsonResponse|CarouselResource
    {
        return new CarouselResource($this->blogs->find($id));
    }

    public function update(Request $request, int $id): JsonResponse|CarouselResource
    {
        $data = $request->all();
        $data['updated_by'] = Auth::id();
        $updated = $this->blogs->update($id, $data);
        return new CarouselResource($updated);
    }

    public function patchSlideOrder(Request $request, int $id): JsonResponse|CarouselResource
    {
        $data = $request->all();
        $data['order'] = $request->order;
        $data['updated_by'] = Auth::id();
        $updated = $this->blogs->update($id, $data);
        return new CarouselResource($updated);
    }

    public function destroy(int $id): JsonResponse
    {
        $this->blogs->delete($id);
        return response()->json(null, 204);
    }
}
