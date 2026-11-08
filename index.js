import { creanppteRoot } from "react-dom/client";
import NavigationBar from "./pages/navigation";

// Clear the existing HTML content
document.body.innerHTML = '<div id="app"></div>';

// Render your React component instead
const root = createRoot(document.getElementById("app"));
root.render(<NavigationBar />);
