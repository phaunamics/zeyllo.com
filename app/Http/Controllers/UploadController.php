<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if ($request->file('image')) {

            if (is_array($request->image)) {
                $path = collect($request->image)->map->store('tmp-editor-uploads');
            } else {
                $path = $request->image->store('tmp-editor-uploads');
            }

            return response()->json([
                'url' => $path
            ], 200);
        }

        return;
    }
}
