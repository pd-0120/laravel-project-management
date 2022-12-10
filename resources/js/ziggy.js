const Ziggy = {
	url: "http://127.0.0.1:8000",
	port: 8000,
	defaults: {},
	routes: {
		"sanctum.csrf-cookie": {
			uri: "sanctum/csrf-cookie",
			methods: ["GET", "HEAD"],
		},
		"livewire.message": {
			uri: "livewire/message/{name}",
			methods: ["POST"],
		},
		"livewire.upload-file": {
			uri: "livewire/upload-file",
			methods: ["POST"],
		},
		"livewire.preview-file": {
			uri: "livewire/preview-file/{filename}",
			methods: ["GET", "HEAD"],
		},
		"ignition.healthCheck": {
			uri: "_ignition/health-check",
			methods: ["GET", "HEAD"],
		},
		"ignition.executeSolution": {
			uri: "_ignition/execute-solution",
			methods: ["POST"],
		},
		"ignition.updateConfig": {
			uri: "_ignition/update-config",
			methods: ["POST"],
		},
		welcome: { uri: "/", methods: ["GET", "HEAD"] },
		login: { uri: "login", methods: ["GET", "HEAD"] },
		logout: { uri: "logout", methods: ["POST"] },
		"password.request": { uri: "password/reset", methods: ["GET", "HEAD"] },
		"password.email": { uri: "password/email", methods: ["POST"] },
		"password.reset": {
			uri: "password/reset/{token}",
			methods: ["GET", "HEAD"],
		},
		"password.update": { uri: "password/reset", methods: ["POST"] },
		"password.confirm": {
			uri: "password/confirm",
			methods: ["GET", "HEAD"],
		},
		home: { uri: "home", methods: ["GET", "HEAD"] },
		profile: { uri: "profile", methods: ["GET", "HEAD"] },
		storeProfile: { uri: "store-profile", methods: ["PUT"] },
		roles: { uri: "roles", methods: ["GET", "HEAD"] },
		storeRole: { uri: "store-role", methods: ["POST"] },
		roleDelete: { uri: "roles-delete/{id}", methods: ["DELETE"] },
		permissions: { uri: "permissions", methods: ["GET", "HEAD"] },
		"users.index": { uri: "users", methods: ["GET", "HEAD"] },
		"users.create": { uri: "users/create", methods: ["GET", "HEAD"] },
		"users.store": { uri: "users", methods: ["POST"] },
		"users.show": {
			uri: "users/{user}",
			methods: ["GET", "HEAD"],
			bindings: { user: "id" },
		},
		"users.edit": {
			uri: "users/{user}/edit",
			methods: ["GET", "HEAD"],
			bindings: { user: "id" },
		},
		"users.update": { uri: "users/{user}", methods: ["PUT", "PATCH"] },
		"users.destroy": {
			uri: "users/{user}",
			methods: ["DELETE"],
			bindings: { user: "id" },
		},
		"tasks.index": { uri: "tasks", methods: ["GET", "HEAD"] },
		"tasks.create": { uri: "tasks/create", methods: ["GET", "HEAD"] },
		"tasks.store": { uri: "tasks", methods: ["POST"] },
		"tasks.show": {
			uri: "tasks/{task}",
			methods: ["GET", "HEAD"],
			bindings: { task: "id" },
		},
		"tasks.edit": {
			uri: "tasks/{task}/edit",
			methods: ["GET", "HEAD"],
			bindings: { task: "id" },
		},
		"tasks.update": {
			uri: "tasks/{task}",
			methods: ["PUT", "PATCH"],
			bindings: { task: "id" },
		},
		"tasks.destroy": {
			uri: "tasks/{task}",
			methods: ["DELETE"],
			bindings: { task: "id" },
		},
		"notes.index": { uri: "notes", methods: ["GET", "HEAD"] },
		"notes.create": { uri: "notes/create", methods: ["GET", "HEAD"] },
		"notes.store": { uri: "notes", methods: ["POST"] },
		"notes.show": {
			uri: "notes/{note}",
			methods: ["GET", "HEAD"],
			bindings: { note: "id" },
		},
		"notes.edit": {
			uri: "notes/{note}/edit",
			methods: ["GET", "HEAD"],
			bindings: { note: "id" },
		},
		"notes.update": {
			uri: "notes/{note}",
			methods: ["PUT", "PATCH"],
			bindings: { note: "id" },
		},
		"notes.destroy": {
			uri: "notes/{note}",
			methods: ["DELETE"],
			bindings: { note: "id" },
		},
		"projects.index": { uri: "projects", methods: ["GET", "HEAD"] },
		"projects.create": { uri: "projects/create", methods: ["GET", "HEAD"] },
		"projects.store": { uri: "projects", methods: ["POST"] },
		"projects.show": {
			uri: "projects/{project}",
			methods: ["GET", "HEAD"],
			bindings: { project: "id" },
		},
		"projects.edit": {
			uri: "projects/{project}/edit",
			methods: ["GET", "HEAD"],
			bindings: { project: "id" },
		},
		"projects.update": {
			uri: "projects/{project}",
			methods: ["PUT", "PATCH"],
			bindings: { project: "id" },
		},
		"projects.destroy": {
			uri: "projects/{project}",
			methods: ["DELETE"],
			bindings: { project: "id" },
		},
		"technologies.index": { uri: "technologies", methods: ["GET", "HEAD"] },
		"technologies.create": {
			uri: "technologies/create",
			methods: ["GET", "HEAD"],
		},
		"technologies.store": { uri: "technologies", methods: ["POST"] },
		"technologies.show": {
			uri: "technologies/{technology}",
			methods: ["GET", "HEAD"],
			bindings: { technology: "id" },
		},
		"technologies.edit": {
			uri: "technologies/{technology}/edit",
			methods: ["GET", "HEAD"],
			bindings: { technology: "id" },
		},
		"technologies.update": {
			uri: "technologies/{technology}",
			methods: ["PUT", "PATCH"],
			bindings: { technology: "id" },
		},
		"technologies.destroy": {
			uri: "technologies/{technology}",
			methods: ["DELETE"],
			bindings: { technology: "id" },
		},
	},
};

if (typeof window !== "undefined" && typeof window.Ziggy !== "undefined") {
	Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };
