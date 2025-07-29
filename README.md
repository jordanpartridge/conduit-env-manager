# 🔧 Conduit env-manager

Complete environment file management component for .env operations.

## ✨ Features

- **env:init** - Smart .env initialization from templates
- **env:set** - Set environment variables with validation
- **env:get** - Retrieve variables with security filtering  
- **env:backup** - Timestamped backup and restore system

### 🛡️ Security Features
- Auto-hides sensitive values (PASSWORD, SECRET, KEY, TOKEN, etc.)
- Input validation for environment variable names
- Safe file operations with error handling

### 🤖 Automation Ready
- `--json` flag for machine-readable output
- `--no-interaction` for CI/CD pipelines
- `--all` flag for bulk operations
- Consistent exit codes for scripting

## 📦 Installation

```bash
# Via Conduit component system (recommended)
conduit components install env-manager

# Via Composer directly
composer require jordanpartridge/conduit-env-manager
```

## 🚀 Usage

### Initialize Environment Files
```bash
# Initialize .env from .env.example
conduit env:init

# Force overwrite existing .env
conduit env:init --force

# Create template if .env.example missing
conduit env:init  # Will prompt to create template
```

### Set Environment Variables
```bash
# Set a variable
conduit env:set APP_NAME "My Application"

# Set with prompts
conduit env:set

# Create .env if it doesn't exist
conduit env:set API_KEY secret123 --create
```

### Get Environment Variables  
```bash
# Get specific variable
conduit env:get APP_NAME

# List all variables (sensitive values hidden)
conduit env:get --all

# JSON output for scripts
conduit env:get --all --json

# Get specific variable as JSON
conduit env:get API_KEY --json
```

### Backup and Restore
```bash
# Create timestamped backup
conduit env:backup

# Create named backup
conduit env:backup --name before-deploy

# Restore from backup (interactive)
conduit env:backup --restore
```

## 🏗️ Architecture

This component follows Conduit standards:
- **Laravel Zero commands** with proper validation
- **Service provider auto-discovery** for seamless integration  
- **Component metadata** in composer.json for discovery
- **Secure by default** with comprehensive error handling

## 🧪 Development

```bash
# Install dependencies
composer install

# Run tests
./vendor/bin/pest

# Code formatting  
./vendor/bin/pint

# Static analysis
./vendor/bin/phpstan analyze

# All quality checks
composer lint && composer analyze && composer test
```

## 📝 Examples

### Complete Workflow
```bash
# Start new project
cd my-project
conduit env:init

# Configure environment
conduit env:set APP_NAME "My Project"
conduit env:set DB_DATABASE my_project_db
conduit env:set API_SECRET $(openssl rand -base64 32)

# Backup before changes
conduit env:backup --name initial-setup

# Verify configuration
conduit env:get --all
```

### CI/CD Integration
```bash
# Non-interactive setup
conduit env:init --force --no-interaction
conduit env:set NODE_ENV production --no-interaction

# JSON output for parsing
API_KEY=$(conduit env:get API_KEY --json | jq -r '.API_KEY')
```

## 📋 Command Reference

| Command | Description | Flags |
|---------|-------------|-------|
| `env:init` | Initialize .env file | `--force` |
| `env:set` | Set variables | `--create` |
| `env:get` | Get variables | `--all`, `--json` |
| `env:backup` | Backup/restore | `--name`, `--restore` |

## 🏷️ Keywords

`conduit`, `laravel`, `cli`, `component`, `conduit-component`, `environment`, `dotenv`, `configuration`

## 📄 License

MIT License. See [LICENSE](LICENSE) for details.