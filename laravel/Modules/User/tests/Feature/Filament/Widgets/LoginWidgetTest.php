<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Form;
=======
=======
>>>>>>> fb6fbaa2 (move resources/lang to lang)
namespace Modules\User\Tests\Feature\Filament\Widgets;

use Filament\Forms\Form;
use Illuminate\Foundation\Testing\RefreshDatabase;
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> fb6fbaa2 (move resources/lang to lang)
=======
use Filament\Forms\Form;
>>>>>>> 3671307a (✨ (Cms): add comprehensive testing strategy for the RegistrationWidget and Login functionalities to ensure robust user authentication and registration processes. This includes separation of concerns between page and widget tests, dynamic type handling, and error management.)
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Modules\User\Filament\Widgets\LoginWidget;
use Modules\User\Models\User;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use function Pest\Laravel\assertAuthenticatedAs;
=======
use Tests\TestCase;
>>>>>>> aurmich/dev
=======
use function Pest\Laravel\assertAuthenticatedAs;
>>>>>>> 3671307a (✨ (Cms): add comprehensive testing strategy for the RegistrationWidget and Login functionalities to ensure robust user authentication and registration processes. This includes separation of concerns between page and widget tests, dynamic type handling, and error management.)

// Skip this test if the test database is not configured
if (!env('DB_CONNECTION') || (env('DB_CONNECTION') === 'sqlite' && !file_exists(database_path('database.sqlite')))) {
    return;
}

<<<<<<< HEAD
<<<<<<< HEAD
uses(Tests\TestCase::class);

beforeEach(function (): void {
    $this->widget = new LoginWidget();
});

test('it can render widget', function (): void {
    expect(LoginWidget::getView())->toContain('user::filament.widgets.login');
});

test('it has correct form schema', function (): void {
    $schema = $this->widget->getFormSchema();
    
    expect($schema)->toHaveCount(3);
    expect($schema)->toHaveKey('email');
    expect($schema)->toHaveKey('password');
    expect($schema)->toHaveKey('remember');
});

test('it can authenticate user', function (): void {
    // Skip if we can't use the database
    if (!class_exists('CreateUsersTable')) {
        $this->markTestSkipped('Database not available for testing');
        return;
    }
    
    /** @var \Modules\User\Models\User $user */
    $user = User::factory()->create([
        'email' => 'test@example.com',
        'password' => Hash::make('password123'),
    ]);

    $this->widget->form->fill([
        'email' => 'test@example.com',
        'password' => 'password123',
        'remember' => true,
    ]);

    $this->widget->save();

    assertAuthenticatedAs($user);
});

test('it validates credentials', function (): void {
    $this->widget->form->fill([
        'email' => 'nonexistent@example.com',
        'password' => 'wrongpassword',
    ]);

    expect(fn () => $this->widget->save())
        ->toThrow(ValidationException::class);
});

test('it requires email and password', function (): void {
    $this->widget->form->fill([
        'email' => '',
        'password' => '',
    ]);

    expect(fn () => $this->widget->save())
        ->toThrow(ValidationException::class);
});
=======
=======
use Tests\TestCase;

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> fb6fbaa2 (move resources/lang to lang)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 0dff6a67 (♻️ (studio.php, RegisterWidget.php, EditUserWidget.php, LoginWidgetTest.php, XotBaseWidget.php): remove merge conflict markers and clean up code to ensure proper functionality and readability)
// Skip this test if the test database is not configured
if (!env('DB_CONNECTION') || (env('DB_CONNECTION') === 'sqlite' && !file_exists(database_path('database.sqlite')))) {
    return;
}

<<<<<<< HEAD
>>>>>>> 4c632a28 (✨ (bashscripts): add new scripts for managing MCP MySQL server and PHPStan analysis)
>>>>>>> f3af6b23 (📝 (bugfix.txt): remove merge conflict markers and clean up documentation for clarity and readability)
=======
>>>>>>> 0dff6a67 (♻️ (studio.php, RegisterWidget.php, EditUserWidget.php, LoginWidgetTest.php, XotBaseWidget.php): remove merge conflict markers and clean up code to ensure proper functionality and readability)
class LoginWidgetTest extends TestCase
{
    use RefreshDatabase;
=======
uses(Tests\TestCase::class);
>>>>>>> 3671307a (✨ (Cms): add comprehensive testing strategy for the RegistrationWidget and Login functionalities to ensure robust user authentication and registration processes. This includes separation of concerns between page and widget tests, dynamic type handling, and error management.)

beforeEach(function (): void {
    $this->widget = new LoginWidget();
});

test('it can render widget', function (): void {
    expect(LoginWidget::getView())->toContain('user::filament.widgets.login');
});

test('it has correct form schema', function (): void {
    $schema = $this->widget->getFormSchema();
    
    expect($schema)->toHaveCount(3);
    expect($schema)->toHaveKey('email');
    expect($schema)->toHaveKey('password');
    expect($schema)->toHaveKey('remember');
});

test('it can authenticate user', function (): void {
    // Skip if we can't use the database
    if (!class_exists('CreateUsersTable')) {
        $this->markTestSkipped('Database not available for testing');
        return;
    }
    
    /** @var \Modules\User\Models\User $user */
    $user = User::factory()->create([
        'email' => 'test@example.com',
        'password' => Hash::make('password123'),
    ]);

    $this->widget->form->fill([
        'email' => 'test@example.com',
        'password' => 'password123',
        'remember' => true,
    ]);

    $this->widget->save();

<<<<<<< HEAD
    /** @test */
    public function it_can_authenticate_user()
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> f3af6b23 (📝 (bugfix.txt): remove merge conflict markers and clean up documentation for clarity and readability)
=======
>>>>>>> 0dff6a67 (♻️ (studio.php, RegisterWidget.php, EditUserWidget.php, LoginWidgetTest.php, XotBaseWidget.php): remove merge conflict markers and clean up code to ensure proper functionality and readability)
        // Skip if we can't use the database
        if (!class_exists('CreateUsersTable')) {
            $this->markTestSkipped('Database not available for testing');
            return;
        }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fb6fbaa2 (move resources/lang to lang)
=======

>>>>>>> 4c632a28 (✨ (bashscripts): add new scripts for managing MCP MySQL server and PHPStan analysis)
>>>>>>> f3af6b23 (📝 (bugfix.txt): remove merge conflict markers and clean up documentation for clarity and readability)
=======
>>>>>>> 0dff6a67 (♻️ (studio.php, RegisterWidget.php, EditUserWidget.php, LoginWidgetTest.php, XotBaseWidget.php): remove merge conflict markers and clean up code to ensure proper functionality and readability)
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => Hash::make('password123'),
        ]);
=======
    assertAuthenticatedAs($user);
});
>>>>>>> 3671307a (✨ (Cms): add comprehensive testing strategy for the RegistrationWidget and Login functionalities to ensure robust user authentication and registration processes. This includes separation of concerns between page and widget tests, dynamic type handling, and error management.)

test('it validates credentials', function (): void {
    $this->widget->form->fill([
        'email' => 'nonexistent@example.com',
        'password' => 'wrongpassword',
    ]);

    expect(fn () => $this->widget->save())
        ->toThrow(ValidationException::class);
});

test('it requires email and password', function (): void {
    $this->widget->form->fill([
        'email' => '',
        'password' => '',
    ]);

<<<<<<< HEAD
    /** @test */
    public function it_validates_credentials()
    {
        $this->expectException(ValidationException::class);
        
        $this->widget->form->fill([
            'email' => 'nonexistent@example.com',
            'password' => 'wrongpassword',
        ]);

        $this->widget->save();
    }

    /** @test */
    public function it_requires_email_and_password()
    {
        $this->expectException(ValidationException::class);
        
        $this->widget->form->fill([
            'email' => '',
            'password' => '',
        ]);

        $this->widget->save();
    }
}
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> fb6fbaa2 (move resources/lang to lang)
=======
    expect(fn () => $this->widget->save())
        ->toThrow(ValidationException::class);
});
>>>>>>> 3671307a (✨ (Cms): add comprehensive testing strategy for the RegistrationWidget and Login functionalities to ensure robust user authentication and registration processes. This includes separation of concerns between page and widget tests, dynamic type handling, and error management.)
