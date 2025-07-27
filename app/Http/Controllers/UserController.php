<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Exception;

class UserController extends Controller
{
    /**
     * Display a paginated listing of users.
     */
    public function indexUser(Request $request)
    {
        $search = $request->query('search');
        $perPage = $request->query('per_page', 10);
        $roles = Role::all();

        $users = User::when($search, function ($query, $search) {
                return $query->where('name', 'LIKE', "%$search%")
                             ->orWhere('email', 'LIKE', "%$search%")
                             ->orWhere('phone', 'LIKE', "%$search%");
            })
            ->with('role:id,name')
            ->orderBy('id', 'desc')
            ->paginate($perPage);

        return response()->json([
            'status' => true,
            'data' => $users,
            'roles' => $roles,
        ], 200);
    }

    /**
     * Store a newly created user.
     */
    public function storeUser(Request $request)
    {
        $request->validate([
            'role_id' => 'required|exists:roles,id',
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|unique:users,email',
            'phone'   => 'required|string|unique:users,phone',
            'password'=> 'required|string|min:6',
        ]);

        try {
            $user = User::create([
                'role_id' => $request->role_id,
                'name'    => $request->name,
                'email'   => $request->email,
                'phone'   => $request->phone,
                'password'=> Hash::make($request->password),
            ]);

            return response()->json([
                'status' => true,
                'message' => 'User created successfully.',
                'data' => $user,
            ], 200);
        } catch (Exception $e) {
            Log::error('Error creating User: ' . $e->getMessage());

            return response()->json([
                'status' => false,
                'message' => 'Error creating User.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Update the specified user.
     */
    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'role_id' => 'required|exists:roles,id',
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|unique:users,email,' . $id,
            'phone'   => 'required|string|unique:users,phone,' . $id,
            'password'=> 'nullable|string|min:6',
            'status'     => 'required|in:active,inactive',
        ]);

        try {
            $user = User::findOrFail($id);

            $updateData = [
                'role_id' => $request->role_id,
                'name'    => $request->name,
                'email'   => $request->email,
                'phone'   => $request->phone,
                'status'     => $request->status,
            ];

            if ($request->filled('password')) {
                $updateData['password'] = Hash::make($request->password);
            }

            $user->update($updateData);

            return response()->json([
                'status' => true,
                'message' => 'User updated successfully.',
                'data' => $user,
            ], 200);
        } catch (Exception $e) {
            Log::error('Error updating User: ' . $e->getMessage());

            return response()->json([
                'status' => false,
                'message' => 'Error updating User.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified user.
     */
    public function destroyUser($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();

            return response()->json([
                'status' => true,
                'message' => 'User deleted successfully.',
                'data' => null,
            ], 200);
        } catch (Exception $e) {
            Log::error('Error deleting User: ' . $e->getMessage());

            return response()->json([
                'status' => false,
                'message' => 'Error deleting User.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
