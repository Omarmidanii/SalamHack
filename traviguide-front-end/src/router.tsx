import { createBrowserRouter } from "react-router-dom";
import Home from "./pages/Home";
import { ErrorPage } from "./pages/ErrorPage";
import ChatBotPage from "./pages/ChatBotPage";
import LandingPage from "./pages/LandingPage";
import PLacesPages from "./pages/PLacesPages";
import PlacesGrid from "./components/PLaces/placesGrid";
import Category from "./components/PLaces/category";
import Addimages from "./pages/Addimages";

const router = createBrowserRouter([
  {
    path: "/",
    element: <Home />,
    errorElement: <ErrorPage />,
    children: [
      { path: "", element: <LandingPage />, errorElement: <ErrorPage /> },
      { path: "chat", element: <ChatBotPage />, errorElement: <ErrorPage /> },
      { path: "addimage", element: <Addimages />, errorElement: <ErrorPage /> },
      {
        path: "places",
        element: <PLacesPages />,
        errorElement: <ErrorPage />,
        children: [
          {
            path: "",
            element: <Category />,
            errorElement: <ErrorPage />,
          },
          {
            path: ":name",
            element: <PlacesGrid />,
            errorElement: <ErrorPage />,
          },
        ],
      },
    ],
  },
]);
export default router;
