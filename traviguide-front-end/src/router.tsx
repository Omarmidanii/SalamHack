import { createBrowserRouter } from "react-router-dom";
import Home from "./pages/Home";
import { ErrorPage } from "./pages/ErrorPage";
import ChatBotPage from "./pages/ChatBotPage";
import LandingPage from "./pages/LandingPage";
import PLacesPages from "./pages/PLacesPages";

const router = createBrowserRouter([
  {
    path: "/",
    element: <Home />,
    errorElement: <ErrorPage />,
    children: [
      { path: "", element: <LandingPage />, errorElement: <ErrorPage /> },
      { path: "chat", element: <ChatBotPage />, errorElement: <ErrorPage /> },
      { path: "places", element: <PLacesPages />, errorElement: <ErrorPage /> },
    ],
  },
]);
export default router;
