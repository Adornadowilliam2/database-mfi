<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     * http://localhost/8000/api/rooms/
     */
    public function index(){
        $rooms = Room::with(['roomtypes'])->get();
        return response()->json([
            'ok' => true,
            'message' => 'Retrieved Successfully',
            'data' => $rooms
        ], 200);
    }

    /**
     * Create a New Room
     * http://localhost/8000/api/rooms/
     */
    public function create(Request $request){
        $validator = validator($request->all(), [
            'room_name' => 'required|max:30',
            'room_type_id' => 'required|exists:room_types,id',
            'location' => 'required|max:30',
            'description' => 'required|max:255',
            'capacity' => 'required|numeric|max:100',
            'image' => 'sometimes|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'ok' => false,
                'message' => 'Room Creation Failed',
                'errors' => $validator->errors()
            ], 400);
        }

        $validated = $validator->validated();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $destinationPath = public_path('/images');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $name);
            $validated['image'] = $name;
        }

        $room = Room::create($validated);

        return response()->json([
            'ok' => true,
            'message' => 'Room Created Successfully',
            'data' => $room
        ], 200);
    }

    /**
     * Display the specified resource.
     * http://localhost/8000/api/rooms/{room}
     */
    public function show(Room $room){
        $room->bookings;
        return response()->json([
            'ok' => true,
            'message' => 'Retrieved Successfully',
            'data' => $room
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     * http://localhost/8000/api/rooms/{room}
     */
    public function update(Request $request, Room $room){
        $validator = validator($request->all(), [
            'room_name' => 'required|max:30',
            'room_type_id' => 'required|exists:room_types,id',
            'location' => 'required|max:30',
            'description' => 'required|max:255',
            'capacity' => 'required|numeric|max:100',
            'image' => 'sometimes|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'ok' => false,
                'message' => 'Room Update Failed',
                'errors' => $validator->errors()
            ], 400);
        }

        $validated = $validator->validated();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $destinationPath = public_path('/images');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $name);
            $validated['image'] = $name;
        }

        $room->update($validated);

        return response()->json([
            'ok' => true,
            'message' => 'Room Updated Successfully',
            'data' => $room
        ], 200);
    }

    /**
     * Delete the specified resource from storage.
     * http://localhost/8000/api/rooms/{room}
     */
    public function destroy(Room $room){
        $room->delete();

        return response()->json([
            'ok' => true,
            'message' => 'Room Deleted Successfully',
            'data' => $room
        ], 200);
    }
}
