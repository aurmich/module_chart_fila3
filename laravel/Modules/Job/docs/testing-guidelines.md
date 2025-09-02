# Job Module - Testing Guidelines

## Testing Framework Requirements

### Environment Configuration
All tests MUST use `.env.testing` configuration:
```env
APP_ENV=testing
DB_CONNECTION=sqlite
DB_DATABASE=saluteora_data_test
QUEUE_CONNECTION=sync
```

### Pest Framework Usage
All tests MUST be written in Pest format. Convert any PHPUnit tests to Pest syntax.

## Business Logic Test Coverage

### 1. Job Processing Tests

#### Core Job Management
```php
<?php

declare(strict_types=1);

use Modules\Job\Models\JobBatch;
use Modules\Job\Jobs\ProcessPatientDataJob;
use Illuminate\Support\Facades\Queue;

describe('Job Processing Business Logic', function () {
    it('creates and processes jobs correctly', function () {
        Queue::fake();
        
        $job = new ProcessPatientDataJob(['patient_id' => 123]);
        
        dispatch($job);
        
        Queue::assertPushed(ProcessPatientDataJob::class, function ($job) {
            return $job->patientData['patient_id'] === 123;
        });
    });
});
```

## Quality Standards

### Test Requirements
- All tests use `declare(strict_types=1);`
- Descriptive test names explaining job scenarios
- Complete setup and teardown
- Meaningful assertions covering job execution
- Performance benchmarks for critical jobs

### Business Logic Focus
- Job processing reliability
- Healthcare workflow automation
- Scheduling accuracy
- Performance monitoring
- Error handling and recovery

---

**Last Updated**: 2025-08-28
**Testing Framework**: Pest
**Environment**: .env.testing
