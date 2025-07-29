# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with this Conduit component.

## Component: env-manager

Complete environment file management component for .env file operations.

## Commands

- **env:init** - Initialize .env from .env.example (creates template if missing)
- **env:set** - Set environment variables with validation  
- **env:get** - Get variables with security filtering (--all, --json flags)
- **env:backup** - Create timestamped backups and restore functionality

## Development Commands

```bash
# Install dependencies
composer install

# Code quality and testing
./vendor/bin/pint          # Laravel PHP formatter
./vendor/bin/phpstan analyze   # Static analysis  
./vendor/bin/pest          # Run tests (Pest framework)
```

## Architecture

This is a Conduit component that follows the standard patterns:
- **ServiceProvider**: Registers all four commands with Laravel/Conduit
- **Commands/**: Four CLI command implementations for complete env management
- **Tests/**: Pest-based test suite

## Key Features

- **Smart initialization**: Creates templates, interactive value setting
- **Security**: Auto-hides sensitive values (PASSWORD, SECRET, KEY, etc.)
- **Validation**: Proper environment variable naming conventions
- **Automation**: JSON output, non-interactive modes for CI/CD
- **Backup/restore**: Timestamped backups with interactive restore

## Integration

This component integrates with Conduit through:
- Service provider auto-discovery
- Command registration via Conduit's component system
- Standard Laravel Zero command patterns
- Follows Conduit component discovery (conduit-component topic)